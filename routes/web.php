<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\Post\PostController;

Route::get('/', [PageController::class, 'home']);
Route::view('view','vibe.vibe');
Route::get('/post/{id}',[PostController::class,'show']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
