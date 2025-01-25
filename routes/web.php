<?php

use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/review/create', [ReviewController::class, 'users'])->name('reviews.create');
Route::post('/review', [ReviewController::class, 'storeReview'])->name('reviews.store');
Route::get('/review/watch/{uuid}', [ReviewController::class, 'showReviews'])->name('reviews.watch');
