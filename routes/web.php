<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('posts/trash', [PostController::class, 'trash'])->name('posts.trash');
Route::post('posts/{post}/restore', [PostController::class, 'restore'])->name('posts.restore')->withTrashed();
Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);