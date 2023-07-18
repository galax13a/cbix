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

            $activeUploadSizes = Uploadsize::where('active', true)->get();

            /*
            $errorResponse = [
                'success' => 0,
                'error' => 'No se ha proporcionado un slug. '.$slug
            ];
            return response()->json($errorResponse, 400);
            */

            if (!$request->has('slug')) {
                $errorResponse = [
                    'success' => 0,
                    'error' => 'No se ha proporcionado un slug. Por favor, inténtalo de nuevo.'
                ];
                return response()->json($errorResponse, 400);
            }

            // Obtenemos el slug
            $slug = $request->input('slug');

            // Ajustamos las rutas con el slug
            $storagePathWithSlug = self::STORAGE_PATH . $slug . '/';
            $publicPathWithSlug = self::PUBLIC_PATH . $slug . '/';
    
            $this->validateFileSize($file, $user);

            $fileWithExt = $file->getClientOriginalName();
            $file_name = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $file_extension = $file->getClientOriginalExtension();

            $file_name_save = Str::slug($file_name) . '_' . time() . '_original';

            $uploadImage = UploadImage::firstOrCreate(
                ['name' => $file_name_save],
                [
                    'user_id' => $user->id,
                    'size' => $file->getSize(),
                    'url' => $publicPathWithSlug . $file_name_save . '.' . $file_extension,
                    'extension' => $file_extension,
                    'uploadfolder_id' => 1,
                ]
            );

            // Creating and saving images
            $this->storeImages($file, $file_name_save, $file_extension, $slug);

            // Obtener la URL de la imagen original y redimensionada
            $original_url = Storage::url($storagePathWithSlug . $file_name_save . '_.' . $file_extension);
            $resized_url_230 = Storage::url($storagePathWithSlug . $file_name_save . '_230.' . $file_extension);
            $resized_url_460 = Storage::url($storagePathWithSlug . $file_name_save . '_460.' . $file_extension);
            $resized_url_840 = Storage::url($storagePathWithSlug . $file_name_save . '_840.' . $file_extension);

            // Crear la respuesta en formato JSON
            $response = array(
                'success' => 1,
                'file' => (object) array(
                    'url' => $original_url,
                    'resized_900' => $resized_url_840,
                    'resized_230' => $resized_url_230,
                    'resized_520' => $resized_url_460,
                )
            );

            // Devolver la respuesta
            return response()->json($response);
        } catch (\Exception $e) {
            // Loguear el error para su posterior análisis
            Log::error('Error al cargar el archivo en EditorJS: ' . $e->getMessage());

            // Crear una respuesta de error
            $errorResponse = [
                'success' => 0,
                'error' => 'Error al cargar el archivo. Por favor, inténtalo de nuevo.'
            ];
            // Devolver la respuesta de error
            return response()->json($errorResponse, 500);
        }
    }

    private function validateFileSize($file, $user)
    {
        $fileSizeKB = $file->getSize() / 1024; // Tamaño del archivo en KB
        $fileSizeMB = $fileSizeKB / 1024; // Tamaño del archivo en MB con decimales
        $fileSizeFormatted = number_format($fileSizeMB, 2) . ' MB ?User : ' . $user->name;

        if ($fileSizeKB > self::MAX_FILE_SIZE) {
            $errorResponse = [
                'success' => 0,
                'error' => 'The file size exceeds the allowed limit of 2MB. File : ' . $fileSizeFormatted,
            ];
            return response()->json($errorResponse, 400);
        }
    }

    private function storeImages($file, $file_name_save, $file_extension, $slug)
    {
        $storagePathWithSlug = self::STORAGE_PATH . $slug . '/';
        $original_path = $storagePathWithSlug . $file_name_save . '_.' . $file_extension;
        $resized_path_230 = $storagePathWithSlug . $file_name_save . '_230.' . $file_extension;
        $resized_path_460 = $storagePathWithSlug . $file_name_save . '_460.' . $file_extension;
        $resized_path_840 = $storagePathWithSlug . $file_name_save . '_840.' . $file_extension;

        // Crear la carpeta de destino si no existe
        if (!Storage::exists($storagePathWithSlug)) {
            Storage::makeDirectory($storagePathWithSlug);
        }

        $image_230 = Image::make($file)->orientate()->resize(null, 230, function ($constraint) {
            $constraint->aspectRatio();
        });

        $image_460 = Image::make($file)->orientate()->resize(null, 520, function ($constraint) {
            $constraint->aspectRatio();
        });

        $image_840 = Image::make($file)->resize(900, null, function ($constraint) {
            $constraint->aspectRatio();
        })->orientate();

        // Guardar la imagen redimensionada con el nombre personalizado
        $file->storeAs($storagePathWithSlug, $file_name_save . '_.' . $file_extension); // save original imagen
        $image_230->save(storage_path('app/' . $resized_path_230));
        $image_460->save(storage_path('app/' . $resized_path_460));
        $image_840->save(storage_path('app/' . $resized_path_840));
    }
}
