<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginC;
use App\Http\Controllers\Register;
use App\Http\Controllers\Forgot;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home');
});

// Route::get('/home', function () {
//     return view('home', [
//         "title" => "Home",

//     ]);
// });
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Maymirza Faiz Firdaus",
        "email" => "maymirza040@gmail.com",
        "Image" => "logocbs.jpg"
        
    ]);
});

// Route::get('/login', [LoginC::class, 'index']);

// Route::get('/register', [Register::class, 'index']);

Route::get('/forgot-pw', [Forgot::class, 'forgot']);

Route::get('/dbcon', function(){
    return view('dbcon');
});

Route::name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/login', [AuthController::class, 'userLogin'])->name('userLogin');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'userRegister'])->name('userRegister');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});