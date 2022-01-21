<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Auth;

Route::prefix('admin')->group(function(){
    Route::get('/' , [DashboardController::class , 'index']);
    Route::get('/users/{user}/posts' , [UsersController::class , 'showPosts'])->name('users.showposts');
    Route::resource('/users' , UsersController::class);
    Route::resource('/roles' , RolesController::class);
    Route::resource('/posts' , PostController::class);
});