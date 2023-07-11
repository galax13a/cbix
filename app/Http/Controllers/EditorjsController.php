<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\User;

class EditorjsController extends Controller
{
    public function imageUpload(Request $request)
    {
            // Obtener el archivo enviado
        try {

            $userID = auth()->id();
            $user = User::find($userID);
            $maxFileSize = 2048; // Tamaño máximo en KB
            $fileSize = $request->file('image')->getSize() / 1024; // Tamaño del archivo en KB
            $fileSizeKB = $request->file('image')->getSize(); // Tamaño del archivo en KB
            $fileSizeMB = $fileSizeKB / 1024; // Tamaño del archivo en MB con decimales
    
            $fileSizeFormatted = number_format($fileSizeMB, 2) . ' MB ?User : '.$user->name ; // 
            if ($fileSize > $maxFileSize) {
                $errorResponse = [
                    'success' => 0,
                    'error' => 'The file size exceeds the allowed limit of 2MB. File : ' . $fileSizeFormatted,
                ];
                return response()->json($errorResponse, 400);
            }

            $file = $request->image;
            $fileWithExt = $file->getClientOriginalName();

            $file_name = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $file_extension = $file->getClientOriginalExtension();

            $file_name_store = Str::slug($file_name) . '_' . time() . '._original.' . $file_extension;
            $file_name_store_230 = Str::slug($file_name) . '_' . time() . '_230.' . $file_extension;
            $file_name_store_460 = Str::slug($file_name) . '_' . time() . '_460.' . $file_extension;
            $file_name_store_840 = Str::slug($file_name) . '_' . time() . '_840.' . $file_extension;
            $original_path = 'public/apps/images/';
            $resized_path = 'public/apps/images/';
            $original_ruta =  'storage/apps/images/';
            $errorMal= true;
            $name_fileImagen = $file_name .'.' . $file_extension;
            $name_filePache = '/'.$original_path.$file_name;
  
            if (Storage::exists($name_filePache)) {       
          //  if ($errorMal) {
                $errorResponse = [
                    'success' => 0,
                    'error' => 'Existe  ' . $name_filePache 
                ];
                return response()->json($errorResponse, 400);
            }else{
                $errorResponse = [
                    'success' => 0,
                    'error' => 'Sigue   ' . storage_path('app')

                ];
                return response()->json($errorResponse, 401);
            }

            $resized_path_230 = $resized_path . $file_name_store_230;
            $resized_path_460 = $resized_path . $file_name_store_460;
            $resized_path_840 = $resized_path . $file_name_store_840;
            // Crear la carpeta de destino si no existe
            if (!Storage::exists($resized_path)) {
                Storage::makeDirectory($resized_path);
            }
            if (!Storage::exists($original_path)) {
                Storage::makeDirectory($original_path);
            }
            //$image = Image::make($file)->fit(300, 300);
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
       
            $file->storeAs($original_path,$file_name_store); // save original imagen
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
                    'original' => $original_url,
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
}
