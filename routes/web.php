<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
Route::get('/post',PostController::class .'@index');
