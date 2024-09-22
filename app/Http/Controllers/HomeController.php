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
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['categories'] = Category::all();

        return view('home.index')->with('viewData',$viewData);
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

    public function about(): View
    {
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['description'] = 'This page was developed as a class project for the subject Special Topics in Systems Engineering at EAFIT University.';
        $viewData['author'] = 'Developed by: John Montoya';

        return view('home.about')->with('viewData', $viewData);
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact us - Online Store';
        $viewData['subtitle'] = 'Contact us';
        $viewData['email'] = 'fxmail@fakestore.com';
        $viewData['address'] = 'Springfield';
        $viewData['phone'] = '604 5521245';

        return view('home.contact')->with('viewData', $viewData);
    }

    public function home(): View
    {
        return view('home');
    }

}
