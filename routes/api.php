<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('posts', [PostController::class, 'index']);
Route::get('post/{id}', [PostController::class, 'show']);
Route::post('post', [PostController::class, 'store']);
Route::put('post/{id}', [PostController::class, 'update']);
Route::delete('post/{id}', [PostController::class, 'destroy']);
