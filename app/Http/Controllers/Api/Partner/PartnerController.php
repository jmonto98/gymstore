<?php
namespace App\Http\Controllers\Api\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class PartnerController extends Controller
{
    public function index()
    {
 
        $response = Http::get('http://34.71.100.126/public/api/products');
        $partners = $response->json();

  
        return view('partner.index', compact('partners'));
    }
}
