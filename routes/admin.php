<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;

Route::group(['prefix'=>'admin'],function (){
    Route::get('/dashboard',[DashboardController::class,'dashboard']);
    Route::resource('/users',UsersController::class);
    Route::get('/users/posts/{id}',[UsersController::class,'posts']);

});
