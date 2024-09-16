<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();
        return view('home.index', compact('categories'));
    }
}
