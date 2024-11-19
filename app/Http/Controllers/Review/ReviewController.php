<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, $productId): RedirectResponse
    {

        Review::validate($request);

        Review::create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
            'approved' => false,
        ]);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
