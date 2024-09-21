<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\UseMode;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show($id): View
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['title'] = $product->getName().' - Online Store';
        $viewData['subtitle'] = $product->getName().' - Product information';
        $viewData['product'] = $product;

        // Obtener el video relacionado del modelo UseMode
        $useMode = UseMode::where('product_id', $product->id)->first(); 
        $viewData['useMode'] = $useMode; 

        return view('product.show')->with('viewData', $viewData);
    }
}
