<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminCategoryController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Create Categories - Gym Store';
        $categories = Category::all();
        $viewData['categories'] = $categories;

        return view('category.home.index')->with('viewData', $viewData);
    }

    public function store(Request $request): RedirectResponse
    {
        Category::validate($request);
        Category::create($request->only(['name', 'description']));

        return redirect()->route('category.home.index')->with('success', 'Category was successfully created');
    }

    public function delete(int $id): RedirectResponse
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.home.index');
    }

    public function edit($id): View
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Edit Category - Gym Store';
        $viewData['category'] = Category::findOrFail($id);

        return view('category.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        Category::validate($request);

        $category = category::findOrFail($id);

        $category->setName($request->input('name'));
        $category->setDescription($request->input('description'));
        $category->save();

        return redirect()->route('category.home.index');
    }
}
