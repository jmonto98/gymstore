<?php
namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class PartnerController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = __('messages.partner_title');
        $viewData['subtitle'] = __('messages.partner_subtitle');
        
        $response = Http::get('http://34.71.100.126/public/api/products'); 
        $partners = $response->json(); 

        $viewData['partners'] = $partners; 

        return view('partner.index')->with('viewData', $viewData);
    }
}

