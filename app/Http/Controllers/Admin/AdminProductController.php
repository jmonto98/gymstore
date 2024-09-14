<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.product.create', compact('products', 'categories'));
    }



    public function store(Request $request): RedirectResponse
    {
        Product::validate($request);

        $newProduct = new Product;
        $newProduct->setName($request->input('name'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setStock($request->input('stock'));
        $newProduct->setImage('default_image.png');
        $newProduct->setSumReviews(0);  
        $newProduct->setTotalReviews(0);
        $newProduct->category_id = $request->input('category_id');
        $newProduct->save();

        if ($request->hasFile('image')) {
            $imageName = $newProduct->getId().'.'.$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newProduct->setImage($imageName);
            $newProduct->save();
        }

        return redirect()->route('admin.product.create')->with('success', 'Element created successfully.');
    }

    public function delete($id): RedirectResponse
    {
        Product::destroy($id);

        return redirect()->route('admin.product.create');
    }

    public function edit($id): View
    {

        $products = Product::findOrFail($id);
        $categories = Category::all(); 
        $viewData = [
            'product' => $products,
            'categories' => $categories,
            'title' => 'Edit Product',
        ];
        return view('admin.product.edit', $viewData);

    }

    public function update(Request $request, $id): RedirectResponse
    {
        Product::validate($request);

        $product = Product::findOrFail($id);
    
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->category_id = $request->input('category_id');
        
        if ($request->hasFile('image')) {

            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
    
            $imageName = $product->id . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            $product->image = $imageName;
        }
    
        $product->save();

        return redirect()->route('admin.product.create')->with('success', 'Product updated successfully.');
    }
}
