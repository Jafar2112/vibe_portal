<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Post\PostController;

Route::get('post-form',[PostController::class,'form']);
