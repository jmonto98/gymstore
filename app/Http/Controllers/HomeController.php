<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(Request $request): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.about_us');
        $viewData['subtitle'] = __('messages.about_us');
        $viewData['categories'] = Category::all();

        $topProducts = Item::select('product_id', DB::raw('SUM(quantity) as total_quantity'))
            ->groupBy('product_id')
            ->orderByDesc('total_quantity')
            ->with('product')
            ->take(5)
            ->get();

        $viewData['topProducts'] = $topProducts;

        return view('home.index')->with('viewData', $viewData);
    }

    public function search(Request $request): View
    {
        $request->validate([
            'name' => 'nullable|string',
        ]);

        $query = $request->input('name', '');
        $viewData = [];
        $viewData['title'] = __('messages.search');
        $viewData['subtitle'] = __('messages.search_results_for');
        
        $viewData['categories'] = Category::where('name', 'like', '%'.$query.'%')->get();
        $viewData['products'] = Product::whereIn('category_id', $viewData['categories']->pluck('id'))->get();
        $viewData['totalProducts'] = $viewData['products']->count();

        return view('home.search')->with('viewData', $viewData);
    }

    public function about(): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.about_us');
        $viewData['subtitle'] = __('messages.about_us');

        return view('home.about')->with('viewData', $viewData);
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.contact_us');
        $viewData['subtitle'] = __('messages.contact_us');
        $viewData['email'] = 'info@gymstore.com';
        $viewData['address'] = '123 Fitness Street, Sports City';
        $viewData['phone'] = '+1 (555) 123-4567';

        return view('home.contact')->with('viewData', $viewData);
    }

    public function home(): View
    {
        return view('home');
    }
}
