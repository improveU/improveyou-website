<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('create-course', [\App\Http\Controllers\CreateCourseController::class, 'get']);
Route::post('create-course', [\App\Http\Controllers\CreateCourseController::class, 'createCourse']);
