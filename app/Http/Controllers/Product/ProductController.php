<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\UseMode;
use App\Services\ExerciseDBService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.products');
        $viewData['subtitle'] = __('messages.list_of_products');
        $viewData['products'] = Product::where('state', 'active')->get();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show($id): View|RedirectResponse
    {
        $product = Product::findOrFail($id);

        $exerciseService = new ExerciseDBService;
        $exercises = $exerciseService->findExercisesByEquipment($product->getName());

        $viewData = [
            'title' => $product->getName(),
            'subtitle' => __('messages.product_details'),
            'product' => $product,
            'suggestedExercises' => [],
        ];

        if (! empty($exercises)) {
            $viewData['suggestedExercises'] = array_slice($exercises, 0, 10); // Limitamos a 10 ejercicios

            Log::info('Exercises found:', [
                'count' => count($viewData['suggestedExercises']),
                'product_name' => $product->getName(),
            ]);
        } else {
            Log::warning('No exercises found for product:', [
                'product_name' => $product->getName(),
            ]);
        }

        $useMode = UseMode::where('product_id', $product->id)->first();
        $viewData['useMode'] = $useMode;
        $viewData['reviews'] = $product->reviews()->orderBy('created_at', 'desc')->take(5)->get();

        return view('product.show')->with('viewData', $viewData);
    }
}
