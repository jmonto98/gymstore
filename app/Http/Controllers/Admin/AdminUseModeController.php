<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\UseMode;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminUseModeController extends Controller
{
    public function store(Request $request): RedirectResponse
    {

        UseMode::validate($request);

        UseMode::create([
            'product_id' => $request->input('product_id'),
            'videoUrl' => $request->input('videoUrl'),
        ]);

        return redirect()->route('admin.useMode.home.index')->with('success', 'Video was successfully added to the product.');
    }

    public function edit($id): View
    {
        $viewData = [];
        $viewData['title'] = 'Edit Video for Product';
        $viewData['useMode'] = UseMode::findOrFail($id);
        $viewData['products'] = Product::all();

        return view('admin.useMode.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        UseMode::validate($request);

        $useMode = UseMode::findOrFail($id);
        $useMode->setProductId($request->input('product_id'));
        $useMode->setVideoUrl($request->input('videoUrl'));
        $useMode->save();

        return redirect()->route('admin.useMode.home.index')->with('success', 'Video was successfully updated.');
    }

    public function delete($id): RedirectResponse
    {
        UseMode::destroy($id);

        return redirect()->route('admin.useMode.home.index')->with('success', 'Video was successfully deleted.');
    }
}
