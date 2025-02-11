<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/test', function () {
//     return view('home');
// });
Route::get('/home', [HomeController::class, 'index']);
