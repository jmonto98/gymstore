<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
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

        
        $useMode = UseMode::where('product_id', $product->id)->first();
        $viewData['useMode'] = $useMode;

        $product = Product::with(['reviews' => function ($query) {
            $query->orderBy('created_at', 'desc'); 
        }])->findOrFail($id);
    
        $viewData = [];
        $viewData['title'] = $product->name;
        $viewData['subtitle'] = 'Product Details';
        $viewData['product'] = $product;
        $viewData['reviews'] = $product->reviews->take(5); 
    

        return view('product.show')->with('viewData', $viewData);
    }
}
