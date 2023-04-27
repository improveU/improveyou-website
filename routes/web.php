<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
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


Route::get('/', [CourseController::class, 'root']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'send']);

Route::get('/form', function () {
    return view('form');
});
//kann glaubs entfernt werden?


Route::get('create-course', [CourseController::class, 'getCourseCreation'])->middleware('iscreator');
Route::post('create-course', [CourseController::class, 'createCourse'])->middleware('iscreator');

Route::get('edit-course/{userId}/{courseId}', [CourseController::class, 'selectCourseToEdit'])->middleware('iscreator');
Route::post('edit-course/{courseId}', [CourseController::class, 'editCourse'])->middleware('iscreator');

Route::get('register', [RegisterController::class, 'show'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [LoginController::class, 'show'])->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');

Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');

Route::post('/updateProfile', [ProfileController::class, 'updateProfile'])->middleware('auth');
Route::post('/updateProfilePicture', [ProfileController::class, 'updateProfilePicture'])->middleware('auth');

Route::get('/payment', [PaymentController::class, 'showOverview'])->middleware('auth');
Route::get('/payment/{id}', [PaymentController::class, 'selectModel'])->middleware('auth');
Route::post('/payment/{id}', [PaymentController::class, 'storeData'])->middleware('auth');


Route::get('/course/{id}', [CourseController::class, 'showCourse'])->middleware('auth');
Route::get('/home', [CourseController::class, 'listAllCourses'])->middleware('auth');

Route::get('/storage/thumbnails/{img}', function () {
    redirect('/');
});


Route::get('/forgotPassword', function () {
    return view('forgotPassword');
    //TODO Xavi
});

Route::get('/resetPassword', function () {
    return view('resetPassword');
    //TODO Xavi
});

Route::get('/resetPassword/{token}', function () {
    return view('');
    //TODO Xavi
});

