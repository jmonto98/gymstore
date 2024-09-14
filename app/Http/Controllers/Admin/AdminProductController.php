<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
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

        return view('admin.product.index', compact('products', 'categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'state' => 'required|in:active,inactive',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $newProduct = new Product;
        $newProduct->name = $request->input('name');
        $newProduct->price = $request->input('price');
        $newProduct->stock = $request->input('stock');
        $newProduct->category_id = $request->input('category_id');
        $newProduct->state = $request->input('state');
        $newProduct->image = 'default_image.png'; // Imagen por defecto

        $newProduct->save();

        if ($request->hasFile('image')) {
            $imageName = 'images/' . $newProduct->id . '.' . $request->file('image')->extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->file('image')->getRealPath()));
            $newProduct->image = $imageName;
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
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $viewData = [
            'product' => $product,
            'categories' => $categories,
            'title' => 'Edit Product',
        ];

        return view('admin.product.edit', $viewData);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'state' => 'required|in:active,inactive',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->category_id = $request->input('category_id');
        $product->state = $request->input('state');

        if ($request->hasFile('image')) {
            // Eliminar imagen existente si existe
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            $imageName = 'images/' . $product->id . '.' . $request->file('image')->extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->file('image')->getRealPath()));
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');
    }
}
