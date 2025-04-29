<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
//---------------test-----------------
// Route::get('/test', function () {
//     return view('home');
// });

// Route::get('/home', function () {
//     return view('home');
// });

//     Route::get('/about', function () {
//         return view('about');
// });

// Route::get('/courses', function () {
//     return view('courses.index');
// })->name('courses');

// Route::get('/singlecourse', function () {
//     return view('courses.singleCourse');
// })->name('singlecourse');

// Route::get('/trainers', function () {
//     return view('trainer');
// })->name('trainers');

// Route::get('/events', function () {
//     return view('event');
// })->name('events');


Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
//-----------------test-----------------

//-----------------Route for home page-----------------

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::resource('/courses', CourseController::class);

Route::resource('/trainers', TrainerController::class);

Route::resource('/events', EventController::class);