<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\View;
use App\Http\Controllers\Admin\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function edit($id): View
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Product - Online Store";
        $viewData["product"] = Product::findOrFail($id);
        return view('admin.product.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id): void
    {
        $request->validate([
        "name" => "required|max:255",
        "description" => "required",
        "price" => "required|numeric|gt:0",
        'image' => 'image',
    ]); 
    }


}