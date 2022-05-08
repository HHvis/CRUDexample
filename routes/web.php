<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GroupController;


Route::get('/', [ProjectController::class, 'index']);

Route::resource('projects', ProjectController::class);
Route::resource('students', StudentController::class);
Route::resource('groups', GroupController::class);


Route::get('students', function () {
    return view('students/createStudent');
});