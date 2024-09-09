<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/people', PeopleController::class. '@index');
Route::get('/city', CityController::class.'@index');
Route::get('/song', SongController::class.'@index');
Route::get('/video', VideoController::class.'@index');
Route::get('/movie', MovieController::class.'@index');
