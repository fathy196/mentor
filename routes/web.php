<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/test', function () {
//     return view('home');
// });
// Route::get('/home', [HomeController::class, 'index']);

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/courses', function () {
    return view('courses.index');
});
Route::get('/courses', function () {
    return view('courses.index');
});
Route::get('/singlecourse', function () {
    return view('courses.singleCourse');
});
Route::get('/trainers', function () {
    return view('trainer');
});
Route::get('/events', function () {
    return view('event');
});
Route::get('/contact', function () {
    return view('contact');
});
