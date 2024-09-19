<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(Request $request): View
    {
        $categories = Category::all();

        return view('home.index', compact('categories'));
    }

    public function search(Request $request): View
    {
        $request->validate([
            'name' => 'nullable|string',
        ]);

        $query = $request->input('name', '');
        $categories = Category::where('name', 'like', '%' . $query . '%')->get();
        $products = Product::whereIn('category_id', $categories->pluck('id'))->get();
        $totalProducts = $products->count();

        return view('home.search')->with('products', $products, 'totalProducts', $totalProducts, 'query', $query);    
    }
}
