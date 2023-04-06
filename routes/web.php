<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CreateCourseController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RegisterController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\ProfileController;


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

Route::get('create-course', [CreateCourseController::class, 'get'])->middleware('iscreator');
Route::post('create-course', [CreateCourseController::class, 'createCourse'])->middleware('iscreator');

Route::get('register', [RegisterController::class, 'show'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [LoginController::class, 'show'])->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');

Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('/contact', [ContactController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');

Route::get('/payment', [PaymentController::class, 'show']);
Route::post('/payment/{id}', [PaymentController::class, 'selector']);

Route::get('/course/{id}', [CourseController::class, 'show']);
