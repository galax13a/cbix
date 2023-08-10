<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Apionechatur;

class ChaturbateController extends Controller
{

    public function profile_api(Request $request)
    {
        $apiUrl = $request->url;
/*
        $response = Http::get($apiUrl);

        if ($response->successful()) {
            $profile = $response->json();

            return response()->json($profile);
        } else {
            return response()->json(['error' => 'Error url']);
        }
        */
        return response()->json(['error' => 'REsponser Profile Server']);
    }
    public function listmodelschatur(Request $request){
        $webmasterCbKey = env('WEBMASTER_CB', 'https://chaturbate.com/api/public/affiliates/onlinerooms/?wm=gQ4iQ&client_ip=request_ip');        
        $limite = $request->input('limit', 15);

        $url_api = $webmasterCbKey . '&limit=' . $limite;
        $response = Http::get($url_api);

        if ($response->successful()) {
             return response()->json($response->json());
        }
    }

    public function profile($chaturbateId, $username)
    {
        // Obtenemos la URL de la API de la base de datos
        $apiUrl = Apionechatur::where('id', $chaturbateId)
                              ->where('name', $username)
                              ->firstOrFail()
                              ->api;

        // Realizamos la solicitud a la API
        $response = Http::get($apiUrl);

        // Verificamos si la solicitud fue exitosa
        if ($response->successful()) {
            // Decodificamos la respuesta JSON
            $profile = $response->json();

            // Enviamos los datos a la vista
            return view('profile', ['profile' => $profile]);
        } else {
            // Gestionamos el error aquí
            return view('error');
        }
    }
}
