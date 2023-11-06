<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ReviewController extends Controller

    {public function store(Request $request, $productId)
        {
            $user = Auth::user(); // Get the currently authenticated user

            $review = new Review;
            $review->name = $request->input('name');
            $review->review = $request->input('review');
            $review->product_id = $productId;
            $review->user_id = $user->id; // Set the user_id based on the currently logged-in user
            $review->save();

            return redirect()->back();
    }


}
