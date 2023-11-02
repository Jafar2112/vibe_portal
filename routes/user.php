<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Post\PostCreate;
use \App\Http\Controllers\VibeCategory\VibeCategoryCreate;
use \App\Http\Controllers\User\ProfileController;
use \App\Http\Controllers\User\UserHomeController;
use \App\Http\Controllers\User\PostController;
use \App\Http\Controllers\NotificationsController;

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'create-post', 'middleware' => 'auth'], function () {

        Route::get('/first-step/{id?}', [PostCreate::class, 'first_step']);
        Route::post('/first-step/{id?}', [PostCreate::class, 'first_step_post'])
            ->name('post.create.first-step');

        Route::get('/second-step/{id}', [PostCreate::class, 'second_step']);
        Route::post('/second-step/{id}', [PostCreate::class, 'second_step_post'])
            ->name('post.create.second-step');

        Route::get('/third-step/{id}', [PostCreate::class, 'third_step']);
        Route::post('/third-step/{id}', [PostCreate::class, 'third_step_post'])
            ->name('post.create.third-step');
    });
    Route::delete('/temporary-image/{id}/{type}', [PostCreate::class, 'delete_temporary_image'])
        ->name('delete.temporary.image');

    Route::group(['prefix' => 'create-vibe-category'], function () {

        Route::get('/first-step/{id?}', [VibeCategoryCreate::class, 'first_step']);
        Route::post('/first-step/{id?}', [VibeCategoryCreate::class, 'first_step_post'])
            ->name('vibe.category.create.first.step.post');

        Route::get('/second-step/{id}', [VibeCategoryCreate::class, 'second_step'])
            ->name('vibe.category.create.second.step');
        Route::post('/second-step/{id}', [VibeCategoryCreate::class, 'second_step_post'])
            ->name('vibe.category.create.second.step.post');

        Route::get('/third-step/{id}', [VibeCategoryCreate::class, 'third_step']);
        Route::post('/third-step/{id}', [VibeCategoryCreate::class, 'third_step_post'])
            ->name('vibe.category.create.third.step.post');
    });
    Route::group(['prefix' => '/user/profile'], function () {

        Route::get('/edit', [ProfileController::class, 'edit']);
        Route::put('/update', [ProfileController::class, 'update'])
            ->name('user.profile.edit');

        Route::get('/change-password', [ProfileController::class, 'change_password']);
        Route::put('/change-password', [ProfileController::class, 'change_password_post'])
            ->name('user.change.password');

        Route::get('/other-information', [ProfileController::class, 'other_information']);
    });
    Route::post('/follow_or_unfollow/{id}', [ProfileController::class, 'follow_or_unfollow']);
    Route::get('/user/home', [UserHomeController::class, 'home']);


    Route::post('/comment-post/{id}', [PostController::class, 'create_comment']);
    Route::get('/notifications', [NotificationsController::class, 'index']);

    Route::post('/like-post/{id}',[\App\Http\Controllers\User\PostController::class,'like_or_dislike']);

});
