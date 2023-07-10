<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class EditorjsController extends Controller
{
    public function imageUpload(Request $request)
    {
        // Verificar si el tamaño del archivo supera el límite permitido (2MB)
        $maxFileSize = 9048; // Tamaño máximo en KB
        $fileSize = $request->file('image')->getSize() / 1024; // Tamaño del archivo en KB
        
        if ($fileSize > $maxFileSize) {
            $errorResponse = [
                'success' => 0,
                'error' => 'The file size exceeds the allowed limit of 2MB.',
            ];
            return response()->json($errorResponse, 400);
        }

        // Obtener el archivo enviado
        try {
            $file = $request->image;
            $fileWithExt = $file->getClientOriginalName();
            
            $file_name = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $file_extension = $file->getClientOriginalExtension();
            $file_name_store = Str::slug($file_name) . '_' . time() . '.' . $file_extension;
            $file_name_store_230 = Str::slug($file_name) . '_' . time() . '_230.' . $file_extension;
            $file_name_store_460 = Str::slug($file_name) . '_' . time() . '_460.' . $file_extension;
            $file_name_store_840 = Str::slug($file_name) . '_' . time() . '_840.' . $file_extension;
            

            $original_path = 'public/apps/images/' . $file_name_store;
            $resized_path = 'public/apps/resized/' . $file_name_store;

            $resized_path_230 = 'public/apps/resized/' . $file_name_store_230;
            $resized_path_460 = 'public/apps/resized/' . $file_name_store_460;
            $resized_path_840 = 'public/apps/resized/' . $file_name_store_840;
            // Crear la carpeta de destino si no existe
            if (!Storage::exists('public/apps/images')) {
                Storage::makeDirectory('public/apps/images');
            }
            if (!Storage::exists('public/apps/resized')) {
                Storage::makeDirectory('public/apps/resized');
            }
            //$image = Image::make($file)->fit(300, 300);
            $image_230 = Image::make($file)->orientate()->resize(null, 230, function ($constraint) {
                $constraint->aspectRatio();
            });            
            
            $image_460 = Image::make($file)->orientate()->resize(null, 460, function ($constraint) {
                $constraint->aspectRatio();
            });
            
            $image_840 = Image::make($file)->resize(840, null, function ($constraint) {
                $constraint->aspectRatio();
            })->orientate();
            

            // Guardar la imagen redimensionada con el nombre personalizado
            
            $image_230->save(storage_path('app/' . $resized_path_230));
            $image_460->save(storage_path('app/' . $resized_path_460));
            $image_840->save(storage_path('app/' . $resized_path_840));

            // Obtener la URL de la imagen original y redimensionada
            $original_url = Storage::url($original_path);
            $resized_url_460 = Storage::url($resized_path_460);
            $resized_url_230 = Storage::url($resized_path_230);
            $resized_url_840 = Storage::url($resized_path_840);
            
            // Crear la respuesta en formato JSON
            $response = array(
                'success' => 1,
                'file' => (object) array(
                    'url' => $resized_url_840,
                    'resized_230' => $resized_url_230,
                    'resized_460' => $resized_url_460,
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
  
}
