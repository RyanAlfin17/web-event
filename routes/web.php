<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\TypeController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');

// login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');

//backend
Route::resource('kota', KotaController::class);
Route::resource('price', PriceController::class);
Route::resource('type', TypeController::class);
Route::resource('event', EventController::class);
