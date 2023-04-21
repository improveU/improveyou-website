<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CreateCourseController;
use App\Http\Controllers\EditCourseController;
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

//Route::get('/', function () {
//    return view('index');
//})->middleware('guest');

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', [ContactController::class, 'show']);
//TODO POST?????

Route::get('/form', function () {
    return view('form');
});
//kann glaubs entfernt werden?



Route::get('create-course', [CreateCourseController::class, 'get'])->middleware('iscreator');
Route::post('create-course', [CreateCourseController::class, 'createCourse'])->middleware('iscreator');

Route::get('edit-course/{userId}/{courseId}', [EditCourseController::class, 'show'])->middleware('iscreator');
Route::post('edit-course/{courseId}', [EditCourseController::class, 'editCourse'])->middleware('iscreator');

Route::get('register', [RegisterController::class, 'show'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [LoginController::class, 'show'])->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');

Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');

Route::get('/profile/{param}', [ProfileController::class, 'sideMenu'])->middleware('auth');
//kann glaubs entfernt werden?


Route::post('/updateProfile', [ProfileController::class, 'updateProfile'])->middleware('auth');
Route::post('/updateProfilePicture', [ProfileController::class, 'updateProfilePicture'])->middleware('auth');

Route::get('/payment', [PaymentController::class, 'show'])->middleware('auth');
Route::post('/payment/{id}', [PaymentController::class, 'selector'])->middleware('auth');

Route::get('/course/{id}', [CourseController::class, 'showCourse'])->middleware('auth');
Route::get('/home', [CourseController::class, 'listAllCourses'])->middleware('auth');

Route::get('/storage/thumbnails/{img}', function (){
    redirect('/');
});



Route::get('/forgotPassword', function (){
    return view('forgotPassword');
    //TODO Xavi
});

Route::get('/resetPassword', function (){
    return view('resetPassword');
    //TODO Xavi
});

Route::get('/resetPassword/{token}', function (){
    return view('');
    //TODO Xavi
});

