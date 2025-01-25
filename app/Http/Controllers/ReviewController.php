<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function users() {
        $users = User::all();
        return view('review_form', ['users' => $users]);
    }

    public function storeReview(Request $request) {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id', // Ensure user_id is required and exists in the users table
            'note' => 'required|string|max:1000', // Ensure notes is required and is a string
        ]);

        // Create a new review
        Review::create($validatedData);

        // Return a response (you can customize this as needed)
        return 'success';
    }

    public function showReviews($uuid)
    {
        // Find the user by UUID
        $user = User::where('uuid', $uuid)->firstOrFail();

        // Get all reviews for the user
        $reviews = $user->reviews; // Assuming the `User` model has a `reviews()` relationship.

        // Return the Blade view with reviews
        return view('reviews_list', ['user' => $user, 'reviews' => $reviews]);
    }
}
