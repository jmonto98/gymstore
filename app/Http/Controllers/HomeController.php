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
            'name' => 'required|string',
        ]);

        $category = Category::where('name', 'like', '%'.$request->category_name.'%')->first();

        if ($category) {

            $products = Product::where('category_id', $category->id)->get();  // Filtrando productos activos (state = 1)
        } else {

            $products = collect();
        }

        return view('home.search', compact('products'));
    }
}
