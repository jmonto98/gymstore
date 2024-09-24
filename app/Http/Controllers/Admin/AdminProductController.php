<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\UseMode;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.product_management');
        $viewData['products'] = Product::all();
        $viewData['categories'] = Category::all();

        return view('admin.product.index')->with('viewData', $viewData);
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

        $useModes = new UseMode;
        $useModes->setProductId($newProduct->getId());
        $useModes->setVideoUrl($request->input('video'));
        $useModes->save();

        if ($request->hasFile('image')) {
            $imageName = 'images/'.$newProduct->id.'.'.$request->file('image')->extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->file('image')->getRealPath()));
            $newProduct->setImage($imageName);
            $newProduct->save();
        }

        return redirect()->route('admin.product.index')->with('success', __('messages.product_indexed_successfully'));
    }

    public function delete($id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        // Eliminar imagen si existe
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('admin.product.index')->with('success', __('messages.product_deleted_successfully'));
    }

    public function edit($id): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.edit_product');
        $viewData['product'] = Product::findOrFail($id);
        $viewData['categories'] = Category::all();

        $useModes = UseMode::where('product_id', $id)->first();
        if ($useModes) {
            $viewData['useMode'] = $useModes->getVideoUrl();
        } else {
            $viewData['useMode'] = __('messages.add_a_video');
        }

        return view('admin.product.edit')->with('viewData', $viewData);
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

        $useModes = UseMode::where('product_id', $id)->first();
        if (! $useModes) {
            $useModes = new UseMode;
        }
        $useModes->setProductId($product->getId());
        $useModes->setVideoUrl($request->input('video'));
        $useModes->save();

        $product->save();

        return redirect()->route('admin.product.index')->with('success', __('messages.product_updated_successfully'));
    }
}
