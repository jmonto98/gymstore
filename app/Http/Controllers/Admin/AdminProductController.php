<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\UseMode;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\View\ViewFinderInterface;

class AdminProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
        $categories = Category::all();

        return view('admin.product.index', compact('products', 'categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        Product::validate($request);
        $newProduct = new Product;
        $newProduct->setName($request->input('name'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setStock($request->input('stock'));
        $newProduct->setCategoryId($request->input('category_id'));
        $newProduct->setState($request->input('state'));
        $newProduct->setImage('default_image.png');
        $newProduct->save();

        if ($request->hasFile('image')) {
            $imageName = 'images/'.$newProduct->id.'.'.$request->file('image')->extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->file('image')->getRealPath()));
            $newProduct->setImage($imageName);
            $newProduct->save();
        }

        return redirect()->route('admin.product.index')->with('success', 'Product indexd successfully.');
    }

    public function delete($id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        // Eliminar imagen si existe
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully.');
    }

    public function edit($id): View
    {
        $useModes = UseMode::where('product_id', $id)->first();
        $viewData = [];
        $viewData['title'] = 'Edit Product';
        $viewData['product'] = Product::findOrFail($id);
        $viewData['categories'] = Category::all();
        if ($useModes) {
            $viewData['useMode'] = $useModes->getVideoUrl();
        }else{
            $viewData['useMode'] = "No video yet";
        }

        return view('admin.product.edit', compact('viewData'));
    }

    public function update(Request $request, $id): RedirectResponse
    {

        Product::validate($request);
        $product = Product::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setPrice($request->input('price'));
        $product->setStock($request->input('stock'));
        $product->setCategoryId($request->input('category_id'));
        $product->setState($request->input('state'));
        

        if ($request->hasFile('image')) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            $imageName = 'images/'.$product->id.'.'.$request->file('image')->extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->file('image')->getRealPath()));
            $product->setImage($imageName);
        }

        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');
    }
}
