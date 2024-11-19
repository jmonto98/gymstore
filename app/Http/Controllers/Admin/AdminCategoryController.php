<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Utils\ImageHandler;

class AdminCategoryController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.manage_categories');
        $categories = Category::all()->sortBy('name');
        $viewData['categories'] = $categories;

        return view('admin.category.index')->with('viewData', $viewData);
    }

    public function store(Request $request): RedirectResponse
    {
        Category::validate($request);

        $imagePath = $request->file('image')->store('categories', 'public');
        Category::create($request->only(['name', 'description']) + ['image' => $imagePath]);

        return redirect()->route('admin.category.index')->with('success', 'Category was successfully created');
    }

    public function edit($id): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.edit_category');
        $viewData['category'] = Category::findOrFail($id);

        return view('admin.category.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        Category::validate($request);

        $category = Category::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }

            $imagePath = ImageHandler::storeImage('categories', $category->getId(), $request->file('image'));
            //$imagePath = 'categories/'.$category->id.'.'.$request->file('image')->extension();
            Storage::disk('public')->put($imagePath, file_get_contents($request->file('image')->getRealPath()));
            $category->setImage($imagePath);
        }

        $category->setName($request->input('name'));
        $category->setDescription($request->input('description'));
        $category->save();

        return redirect()->route('admin.category.index');
    }
}
