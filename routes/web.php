<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/contact',PostController::class .'@contact');
Route::get('/',PostController::class .'@home');
Route::get('/post/{id}/{name}',PostController::class .'@post');
