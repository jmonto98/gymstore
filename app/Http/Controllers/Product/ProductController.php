<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ExerciseDBService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    private function extractYouTubeId(string $url): ?string
    {
        preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([a-zA-Z0-9_-]+)/', $url, $matches);

        return $matches[1] ?? null;
    }

    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.products');
        $viewData['subtitle'] = __('messages.list_of_products');
        $viewData['products'] = Product::where('state', 'active')->orderBy('name')->get();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show($id): View|RedirectResponse
    {
        $product = Product::findOrFail($id);

        $useMode = $product->useModes()->first();

        $videoId = null;
        if ($useMode && $useMode->videoUrl) {
            $videoId = $this->extractYouTubeId($useMode->videoUrl);
        }

        $exerciseService = new ExerciseDBService;
        $exercises = $exerciseService->findExercisesByEquipment($product->getName());

        $viewData = [
            'title' => $product->getName(),
            'subtitle' => __('messages.product_details'),
            'product' => $product,
            'suggestedExercises' => [],
            'videoId' => $videoId,
        ];

        if (! empty($exercises)) {
            $viewData['suggestedExercises'] = array_slice($exercises, 0, 10);
        }

        $viewData['reviews'] = $product->reviews()->orderBy('created_at', 'desc')->take(5)->get();

        return view('product.show')->with('viewData', $viewData);
    }
}
