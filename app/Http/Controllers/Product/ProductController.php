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
        $viewData['title'] = __('messages.products');
        $viewData['subtitle'] = __('messages.list_of_products');
        $viewData['products'] = Product::where('state', 'active')->get();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show($id): View
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['title'] = $product->getName();
        $viewData['subtitle'] = __('messages.product_details');
        $viewData['product'] = $product;

        $useMode = UseMode::where('product_id', $product->id)->first();
        $viewData['useMode'] = $useMode;

        $reviews = Product::with(['reviews' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])->findOrFail($id);
        $viewData['reviews'] = $reviews->reviews->take(5);

        return view('product.show')->with('viewData', $viewData);
    }
}
