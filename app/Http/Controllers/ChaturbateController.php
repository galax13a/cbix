<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Apionechatur;

class ChaturbateController extends Controller
{
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
