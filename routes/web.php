<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

Route::get('/users/{user}/edit', [UserController::class,'edit'])
->middleware('can:update,user');

Route::put('/users/{user}', [UserController::class,'update'])
->middleware('can:update,user');

Route::delete('/users/{user}', [UserController::class,'destroy'])
->middleware('can:delete,user');
