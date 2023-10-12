<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Post\PostCreate;

Route::group(['prefix' => 'create-post','middleware'=>'auth'], function () {

    Route::get('/first-step/{id?}', [PostCreate::class, 'first_step']);
    Route::post('/first-step/{id?}', [PostCreate::class, 'first_step_post'])
        ->name('post.create.first-step');
    Route::get('/second-step/{id}', [PostCreate::class, 'second_step']);
    Route::post('/second-step/{id}',[PostCreate::class,'second_step_post'])
        ->name('post.create.second-step');
    Route::get('/third-step/{id}',[PostCreate::class,'third_step']);
    Route::post('/third-step/{id}',[PostCreate::class,'third_step_post'])
        ->name('post.create.third-step');
});
Route::get('/temporary-posts',[PostCreate::class,'posts']);
Route::delete('/temporary-image/{id}',[PostCreate::class,'delete_temporary_image'])
    ->name('delete.temporary.image');

