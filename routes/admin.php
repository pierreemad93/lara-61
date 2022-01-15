<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\DashboardController;

Route::prefix('admin')->group(function(){
    Route::get('/' , [DashboardController::class , 'index']);
    Route::resource('/users' , UsersController::class);
    Route::resource('/roles' , RolesController::class);

    // Route::get('/role' , function(){
    //     $roles = Role::with([
    //         'users' => function($query){
    //             $query->select('name' , 'email' , 'role_id');
    //         }
    //     ])->get();

    //     return response()->json($roles);
    // });

});