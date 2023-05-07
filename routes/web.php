<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DashboardController;
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


Route::get('/', [CourseController::class, 'root'])->name('home');
Route::get('/courses/{category}', [CourseController::class, 'listSpecificCourses'])->middleware('auth');

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'send']);

Route::get('/report/{id}', [DashboardController::class, 'showReport']);
Route::post('/report/{courseId}', [DashboardController::class, 'send'])->middleware('auth');

Route::get('createCourse', [CourseController::class, 'getCourseCreation'])->middleware('iscreator');
Route::post('createCourse', [CourseController::class, 'createCourse'])->middleware('iscreator');

Route::get('editCourse/{userId}/{courseId}', [CourseController::class, 'selectCourseToEdit'])->middleware('iscreator');
Route::post('editCourse/{courseId}', [CourseController::class, 'editCourse'])->middleware('iscreator');
Route::post('deleteCourse/{courseId}', [CourseController::class, 'deleteCourse'])->middleware('iscreator');

Route::get('register', [RegisterController::class, 'show'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [LoginController::class, 'show'])->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');

Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');
Route::get('/profile/{id}', [ProfileController::class, 'publicProfile'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware('auth');
Route::post('/dashboard', [DashboardController::class, 'show'])->middleware('auth');
Route::post('/deleteReport/{id}', [DashboardController::class, 'deleteReport'])->middleware('auth');
Route::post('/deleteReportQuick/{id}', [DashboardController::class, 'deleteReportQuick'])->middleware('auth');

Route::post('/updateProfile', [ProfileController::class, 'updateProfile'])->middleware('auth');
Route::post('/updateProfilePicture', [ProfileController::class, 'updateProfilePicture'])->middleware('auth');
Route::post('/updateProfileDescription', [ProfileController::class, 'updateProfileDescription'])->middleware('auth');
Route::post('/updateBilling', [ProfileController::class, 'updateBilling'])->middleware('auth');

Route::get('/payment', [PaymentController::class, 'showOverview'])->middleware('auth');
Route::get('/payment/{id}', [PaymentController::class, 'selectModel'])->middleware('auth');
Route::post('/payment/{id}', [PaymentController::class, 'storeData'])->middleware('auth');

Route::get('/course/{id}', [CourseController::class, 'showCourse'])->middleware('auth');
Route::get('/home', [CourseController::class, 'listAllCourses'])->middleware('auth');

Route::get('/storage/thumbnails/{img}', function () {
    redirect('/')->with('status', "don't look at my pics bruh");
});

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm']);
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm']);
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/search-results', [SearchController::class, 'showResults']);
Route::post('/search-results', [SearchController::class, 'showResults']);

Route::namespace('App\Http\Controllers')->group(function () {
    // Routes: use the namespace 'App\Http\Controllers'
    Route::get('/search', 'SearchController@search');
});

