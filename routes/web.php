<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/students', StudentController::class .'@index')->name('students.index');
Route::get('/students/{id}', StudentController::class .'@show');
Route::get('/students/sort/{sort}', StudentController::class .'@sortBy');
Route::get('/students/data/create', StudentController::class .'@create');
Route::get('/students/data/update', StudentController::class .'@update');
Route::get('/students/forcedelete/{id}', StudentController::class .'@forceDelete');
Route::get('/students/trash/{id}', StudentController::class .'@trash');
Route::get('/students/trash/data/show', StudentController::class .'@trashData');
Route::get('/students/trash/data/restore/{id}', StudentController::class .'@trashRestore');
