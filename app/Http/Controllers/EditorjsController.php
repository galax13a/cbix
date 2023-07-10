<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class EditorjsController extends Controller
{
    public function imageUpload(Request $request)
    {
        // Obtener el archivo enviado
        try {
        $file = $request->image;
        $fileWithExt = $file->getClientOriginalName();
        
        $file_name = pathinfo($fileWithExt, PATHINFO_FILENAME);
        $file_extension = $file->getClientOriginalExtension();
        $file_name_store = Str::slug($file_name) . '_' . time() . '.' . $file_extension;
        $path = $file->storeAs('public/apps/images', $file_name_store);
      //  $imagen_path = '/storage/editorjs/apps/'.$path;        
        // Obtener la URL del archivo guardado
        $url = Storage::url($path);        
        // Crear la respuesta en formato JSON
        $response = array(
            'success' => 1,
            'file' => (object) array(
                'url' => $url,
                )
            );    
        
        // Devolver la respuesta
        return response()->json($response);

        }catch (\Exception $e) {
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
