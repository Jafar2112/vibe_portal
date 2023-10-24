<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\Post\PostController;
use \App\Http\Controllers\VibeController;
use \App\Http\Controllers\User\ProfileController;

Route::get('/', [PageController::class, 'home']);
Route::view('view','vibe.vibe');
Route::get('/vibe/{id}',[VibeController::class,'show']);
Route::get('/post/{id}',[PostController::class,'show']);

Route::get('/profile/{id}',[ProfileController::class,'show']);
Route::get('/profile/about/{id}',[ProfileController::class,'about']);

Route::post('/like-post/{id}',[]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
