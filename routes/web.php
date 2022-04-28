<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/cars', [CarsController::class, "index"])->name('cars');

Route::get('/register', [RegisterController::class, "index"])->name('register');
Route::post('/register', [RegisterController::class, "store"]);

Route::get('/login', [LoginController::class, "index"])->name('login');
Route::post('/login', [LoginController::class, "store"]);

Route::get('/logout', [LogoutController::class, "index"])->name('logout');

Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');


Route::get('/admin', [AdminController::class, "index"])->name("admin");

Route::post('/createimg', [DashboardController::class, "createimg"])->name("createimg");
Route::delete('/deleteimg/{image}', [DashboardController::class, "deleteimg"])->name("deleteimg");
