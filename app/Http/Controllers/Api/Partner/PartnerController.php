<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class PartnerController extends Controller
{
    public function index()
    {
        // Obtener datos desde la API
        $response = Http::get('http://34.71.100.126/public/api/products');
        $partners = $response->json();

        // Retornar los datos en formato JSON
        return response()->json($partners, 200);
    }
}
