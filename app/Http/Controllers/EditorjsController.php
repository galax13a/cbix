<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\User;
use App\Models\Uploadimage;
use App\Models\Uploadsize;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use voku\helper\HtmlDomParser;
use OpenAI\Laravel\Facades\OpenAI;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class EditorjsController extends Controller
{
    const MAX_FILE_SIZE = 4048; // Tamaño máximo en KB
    const STORAGE_PATH = 'public/apps/images/';
    const PUBLIC_PATH = 'storage/apps/images/';
    const PUBLIC_PATH_TEMA = 'storage/apps/images/';


    public function creditoruploadimagen(Request $request)
    {
       
            $imageData = $request->input('url');
                if($imageData){

                    try {
                    $image = Image::make($imageData);
                    $extension = $image->mime() === 'image/jpeg' ? 'jpg' : ($image->mime() === 'image/png' ? 'png' : 'webp');
                    $dimension = $request->input('dimension', '1024x768');             
                    // Extraer ancho y alto de la dimensión
                    [$width, $height] = explode('x', $dimension);            
                    // 2. Redimensionar la imagen
                    $image->resize($width, $height, function ($constraint) {
                        $constraint->aspectRatio();
                    });            
                    // 3. Guardar la imagen redimensionada
                    $slug = 'temas/images';
                    $fileName = Str::random(11) . '.' . $extension;
                    if (!Storage::disk('public')->exists($slug)) {
                        Storage::disk('public')->makeDirectory($slug);
                    }
                    $path = $slug . '/' . $fileName;
                    $image->save(storage_path('app/public/' . $path));            
                    // 4. Devolver respuesta con el estado y URL de la imagen procesada
                    $url = asset('storage/' . $path); // asumiendo que estás usando el enlace simbólico `storage`
                    return response()->json([
                        'success' => 1,
                        'url' => $url
                    ]);
                    
                } catch (\Exception $e) {
                    // Registrar el error y devolver un mensaje de error
                    Log::error('Error al subir y procesar la imagen: ' . $e->getMessage());
                    return response()->json([
                        'success' => 0,
                        'error' => 'Error al subir la imagen. Por favor, inténtalo de nuevo.'
                    ], 500);
                }
            }else {
                return response()->json([
                    'success' => 0,
                    'error' => 'Error File Null Imagen.'
                ], 500);
            }
    }
    
    public function uploadCrop(Request $request)
    {
        try {
            // Suponiendo que estás usando la autenticación predeterminada de Laravel
            $user = auth()->user();
    
            $base64Image = $request->input('url');
            if (!preg_match('/^data:image\/(\w+);base64,/', $base64Image, $type)) {
                return response()->json([
                    'success' => 0,
                    'error' => 'The provided content is not a valid image.'
                ], 400);
            }
    
            $imageContent = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64Image));
            
            $slug = 'temas/images';
            $fileName = Str::random(11) . '.png';
    
            if (!Storage::disk('public')->exists($slug)) {
                Storage::disk('public')->makeDirectory($slug);
            }
    
            // Guarda la imagen directamente sin Intervention Image
            Storage::disk('public')->put($slug . '/' . $fileName, $imageContent);
    
            // Optimiza la imagen con spatie/image-optimizer
            $absoluteImagePath = storage_path('app/public/' . $slug . '/' . $fileName);
            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize($absoluteImagePath);
    
            // Recolecta información sobre la imagen para la base de datos
            $size = Storage::disk('public')->size($slug . '/' . $fileName);
            $extension = pathinfo($fileName, PATHINFO_EXTENSION);
            $url = asset('storage/' . $slug . '/' . $fileName);
    
            // Inserta datos en la base de datos
            UploadImage::create(
                [
                    'name' => $fileName,
                    'user_id' => $user->id,
                    'size' => $size,
                    'url' => $url,
                    'extension' => $extension,
                    'uploadfolder_id' => 5,
                ]
            );
    
            return response()->json([
                'success' => 1,
                'url' => $url
            ]);
        } catch (\Exception $e) {
            Log::error('Error uploading the cropped image: ' . $e->getMessage());
    
            return response()->json([
                'success' => 0,
                'error' => 'Error uploading the cropped image. Please try again.'
            ], 500);
        }
    }


    public function getAIPro(Request $request)
    {
        $prompt = $request->input('topic');
        $prompt_translate = $request->input('topic');
        $translate = $request->input('translate');
        $tokens = $request->input('tokens', 100);
        $tokens = intval($tokens);
        $prom_system_es = "Eres un asistente de inteligencia artificial capacitado para redactar artículos de blog con SEO SENIOR experto en google y posicionamiento. genera texto en html para generar un excelente articulo";
        $prom_system_en = "You are an AI assistant trained to write blog articles with SEO like Wordpress. Generate text in HTML format that can be displayed in CKEditor and receive pure HTML.";

        if ($translate === "en") {
            // Si es una solicitud de traducción en inglés, cambiamos el prompt y el sistema de instrucciones a inglés.
            $prompt = "You are a translation assistant, do not reply to this message as a robot,, You must translate this text from Spanish correctly to English:  {$prompt_translate}";
            $prom_system = $prom_system_en;
        } elseif ($translate === "es") {
            // Si no es una solicitud de traducción, utilizamos el prompt y el sistema de instrucciones en español.
            $prompt = "Eres un asistente de traducción, no respondas a este mensaje como robot , Debes de Traducir esto de texto Spanish correctamente al inglés :  {$prompt_translate}";
            $prom_system = $prom_system_es;
        }

        switch ($translate) {
            case 'en':
                $prom_system = $prom_system_en;
                break;
            case 'es':
                $prom_system = $prom_system_es;
                break;
            default:
                $prom_system = $prom_system_es;
                break;
        }

        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003', //text-davinci-003
            'prompt' => $prom_system . $prompt,
            'max_tokens' => $tokens,
            'temperature' => 0.8,
        ]);

        $quote = $result['choices'][0]['text'];
        $promText = "Este es un texto promocional estático.";

        return response()->json([
            'quote' => $quote,
            'topic' => $prompt_translate,
            'promText' => $promText,
        ]);
    }


    public function getAIFree(Request $request)
    {

        $prompt = $request->input('topic');
        $prom_system = 'Actúa como un experto editor de textos, te daré un texto y un estilo y tono de escritura, y debes redactar nuevamente el texto pero usando ese estilo y tono especifico, no des explicaciones, solo redacta nuevamente el texto, ¿estas listo? te dare mi idea acontinuacion en el siguiente promt no debes de hacer cambios a este prom inicial ';
        $prom_system = null;
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',                    //'text-davinci-003',
            'prompt' => $prom_system . $prompt,
            'max_tokens' => 300,
            'temperature' => 0.8,
        ]);

        $quote = $result['choices'][0]['text'];
        $promText = "Este es un texto promocional estático.";

        return response()->json([
            'quote' => $quote,
            'topic' => $prompt,
            'promText' => $promText,
        ]);
    }

    public function generateQuote($topic)
    {

        $quotes = [
            'Esta es la primera cita posible.',
            'Esta es la segunda cita posible.',
            'Esta es la tercera cita posible.',
            'Esta es la cuarta cita posible.',
        ];
        $randomIndex = rand(0, count($quotes) - 1);

        return $quotes[$randomIndex];
    }


    public function getChaturDom(Request $request)
    {
        $url = $request->get('url');

        $client = new Client();
        $res = $client->request('GET', $url);

        // Parse the URL and get the path
        $path = parse_url($url, PHP_URL_PATH);

        // Split the path into segments
        $segments = explode('/', $path);

        // Get the last segment, which should be the username
        $username = end($segments);

        if ($res->getStatusCode() == 200) {
            // Get HTML content
            $html = $res->getBody()->getContents();
            // Create a DOM object
            $dom = HtmlDomParser::str_get_html($html);
            // Extract data from the HTML
            // TODO: Update these to match the actual structure of Chaturbate's HTML
            $title = $dom->find('title', 0)->plaintext;
            $title = str_replace("&amp;", "-", $title);
            $parsedUrl = parse_url($url);

            if (isset($parsedUrl['path'])) {
                $pathSegments = explode('/', $parsedUrl['path']);
                $name = end($pathSegments);
            } else {
                // Manejar el caso en el que no se encuentra la ruta
                $name = null;
            }

            $prueba = $pathSegments[0];
            // Generate a random number between 0 and 1
            $randomNumber = mt_rand() / mt_getrandmax();
            $path = parse_url($url, PHP_URL_PATH);
            $segments = explode('/', rtrim($path, '/'));
            $name = end($segments);

            // Append the random number to the URL
            $image = 'https://cbjpeg.stream.highwebmedia.com/stream?room=' . $name  . '&Botchatur=' . $randomNumber;
            // Create random float for image URL
            $randomFloat = mt_rand() / mt_getrandmax();
            $image .= '&f=' . $randomFloat;
            $name = str_replace("&amp;", "-", $name);

            // Build the data array
            $data = [
                'title' => '💜' . 'Botchatur' . ':: ' . $title . ' | 💘 Join my live show now ',
                'name' => '❤️' . $name,
                'image' => $image,
            ];

            return response()->json($data);
        }

        return response()->json(['error' => 'Unable to fetch URL'], 400);
    }

    public function loadIframe(Request $request)
    {
        $url = $request->get('url');
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return response()->json([
                'iframe' => $url,
                'mensaje' => 'Página cargada con éxito',
            ]);
        } else {
            return response()->json([
                'mensaje' => 'La URL proporcionada no es válida',
            ]);
        }
    }

    public function GetUrlDom(Request $request)
    {
        $url = $request->input('url');
        $client = new Client();

        $response = $client->request('GET', $url);
        $html = (string) $response->getBody();
        $crawler = new Crawler($html);

        // Obten el título de la página
        $title = $crawler->filter('title')->first()->text();

        // Obten la descripción de la página
        $description = '';
        $metaNodes = $crawler->filter('meta');
        foreach ($metaNodes as $metaNode) {
            if (strtolower($metaNode->getAttribute('name')) === 'description') {
                $description = $metaNode->getAttribute('content');
                break;
            }
        }

        return response()->json([
            'title' => $title,
            'description' => $description,
        ]);
    }



    private function validateFileSize($file, $user)
    {
        $fileSizeKB = $file->getSize() / 1024;
        $fileSizeMB = $fileSizeKB / 1024;
        $fileSizeFormatted = number_format($fileSizeMB, 2) . ' MB ?User : ' . $user->name;

        if ($fileSizeKB > self::MAX_FILE_SIZE) {
            $errorResponse = [
                'success' => 0,
                'error' => 'The file size exceeds the allowed limit of 2MB. File : ' . $fileSizeFormatted,
            ];
            return response()->json($errorResponse, 400);
        }
    }

    private function storeImages($file, $file_name_save, $file_extension, $slug, $user, $publicPathWithSlug)
    {
        $storagePathWithSlug = self::STORAGE_PATH . $slug . '/';
        $original_path = $storagePathWithSlug . $file_name_save . '.' . $file_extension;

        if (!Storage::exists($storagePathWithSlug)) {
            Storage::makeDirectory($storagePathWithSlug);
        }

        $file->storeAs($storagePathWithSlug, $file_name_save . '.' . $file_extension); // save original image

        UploadImage::create(
            [
                'name' => $file_name_save,
                'user_id' => $user->id,
                'size' => $file->getSize(),
                'url' => $publicPathWithSlug . $file_name_save . '.' . $file_extension,
                'extension' => $file_extension,
                'uploadfolder_id' => 1,
            ]
        );

        $activeUploadSizes = Uploadsize::where('active', true)->get();
        foreach ($activeUploadSizes as $uploadSize) {
            $width = $uploadSize->width;
            $resized_path = $storagePathWithSlug . $file_name_save . "_{$width}." . $file_extension;

            $image = Image::make($file)->orientate()->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $image->save(storage_path('app/' . $resized_path));

            UploadImage::create(
                [
                    'name' => $file_name_save . "_{$width}",
                    'user_id' => $user->id,
                    'size' => Storage::size($resized_path),
                    'url' => $publicPathWithSlug . $file_name_save . "_{$width}." . $file_extension,
                    'extension' => $file_extension,
                    'uploadfolder_id' => 1,
                ]
            );
        }
    }
}
