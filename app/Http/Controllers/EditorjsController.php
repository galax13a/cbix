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
            $image = 'https://cbjpeg.stream.highwebmedia.com/stream?room=' . $name  . '&Botchatur='.$randomNumber;

            // Create random float for image URL
            $randomFloat = mt_rand() / mt_getrandmax();
            $image .= '&f=' . $randomFloat;

      
            $name = str_replace("&amp;", "-", $name);

            // Build the data array
            $data = [ 
                'title' => '💜' . 'Botchatur' . ':: ' . $title . ' | 💘 Join my live show now ',
                'name' => '❤️'. $name,
                'image' => $image,
            ];

            return response()->json($data);
        }

        return response()->json(['error' => 'Unable to fetch URL'], 400);
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
