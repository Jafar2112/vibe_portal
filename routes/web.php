<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\VibeController;
use \Illuminate\Support\Facades\Log;

Route::get('/', [PageController::class, 'home']);
Route::get('/vibe-category',[VibeController::class,'category']);
Route::get('/vibe-categories',[VibeController::class,'categories']);
Route::post('form',function (\Illuminate\Http\Request $request){});
Route::get('/l',function (){
   return view('login');
});
Route::get('/test',function (){
   return view('test');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
