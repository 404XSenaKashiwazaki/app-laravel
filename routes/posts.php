<?php

use App\Http\Controllers\Posts\PostsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('posts', [PostsController::class,"index"])
        ->name('posts');
});

Route::middleware('auth')->group(function () {
    Route::post('posts/store', [PostsController::class,"store"])
        ->name('posts.store');
});

Route::middleware('auth')->group(function () {
    Route::put('posts/update/{id}', [PostsController::class,"update"])
        ->name('posts.update');
});

Route::middleware('auth')->group(function () {
    Route::delete('posts/destroy/{id}', [PostsController::class,"destroy"])
        ->name('posts.destroy');
});
