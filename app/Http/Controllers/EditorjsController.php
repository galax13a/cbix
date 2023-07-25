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


class EditorjsController extends Controller
{
    const MAX_FILE_SIZE = 4048; // Tamaño máximo en KB
    const STORAGE_PATH = 'public/apps/images/';
    const PUBLIC_PATH = 'storage/apps/images/';

    public function imageUpload(Request $request)
    {
        try {
            $file = $request->image;
            $user = User::findOrFail(auth()->id());
            $slug = $request->input('slug');

            if (!$request->has('slug')) {
                $errorResponse = [
                    'success' => 0,
                    'error' => 'No se ha proporcionado un slug. Por favor, inténtalo de nuevo.'
                ];
                return response()->json($errorResponse, 400);
            }

            $slug = $request->input('slug');

            $storagePathWithSlug = self::STORAGE_PATH . $slug . '/';
            $publicPathWithSlug = self::PUBLIC_PATH . $slug . '/';

            $this->validateFileSize($file, $user);

            $fileWithExt = $file->getClientOriginalName();
            $file_name = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $file_extension = $file->getClientOriginalExtension();

            $file_name_save = Str::slug($file_name) . '_' . time() . '_original';

            $this->storeImages($file, $file_name_save, $file_extension, $slug, $user, $publicPathWithSlug);

            $activeUploadSizes = Uploadsize::where('active', true)->get();
            $resized_images = array();
            foreach ($activeUploadSizes as $uploadSize) {
                $width = $uploadSize->width;
                $resized_url = Storage::url($storagePathWithSlug . $file_name_save . "_{$width}." . $file_extension);
                $resized_images["resized_{$width}"] = $resized_url;
            }

            $original_url = Storage::url($storagePathWithSlug . $file_name_save . '.' . $file_extension);

            $response = array(
                'success' => 1,
                'file' => (object) array_merge(
                    ['url' => $original_url],
                    $resized_images
                )
            );

            return response()->json($response);
        } catch (\Exception $e) {
            Log::error('Error al cargar el archivo en EditorJS: ' . $e->getMessage());

            $errorResponse = [
                'success' => 0,
                'error' => 'Error al cargar el archivo. Por favor, inténtalo de nuevo.'
            ];
            return response()->json($errorResponse, 500);
        }
    }

public function getAIPro(Request $request){
    $prompt = $request->input('topic');
    $prom_system = 'despues de recibir el prompt  devuelvelo en formato para ckeditor tipo html muy enriquesido con buenos titulos h1, h2 y h3 importantes como h1 h2 h3 h4 strong links y demas html para seo haz tu mejor trabajo, Comportate como experto en SEo y devuelve un tpo pagina wordpress con muy buen seo no olvides el strong y ';
    
    $prom_system = "Eres un asistente de inteligencia artificial capacitado para redactar artículos de blog con SEO.";
    $prompt = "Me gustaría un artículo sobre {$prompt}. Debe contener encabezados H1, H2 y H3, texto en negrita para los puntos clave y estar optimizado para SEO.";

    $result = OpenAI::completions()->create([
        'model' => 'text-davinci-003',
        'prompt' => $prom_system . $prompt,
        'max_tokens' => 666,
        'temperature' => 0.6,            
    ]);

    $quote = $result['choices'][0]['text'];
    $promText = "Este es un texto promocional estático.";

    return response()->json([
        'quote' => $quote,
        'topic' => $prompt,
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
            'temperature' =>0.8,            
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
