<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Post\PostController;

Route::get('/create-post',[PostController::class,'create']);
Route::post('/create-post',[PostController::class,'store']);
