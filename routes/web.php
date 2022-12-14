<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ConfirmEmailController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('home'); }) -> name('home');
Route::get('/about', function () { return view('about'); }) -> name('about');
Route::get('/register', [RegisterController::class, 'index']) -> name('register');
Route::get('/login', [LoginController::class, 'index']) -> name('login');
Route::get('/confirmEmail', [ConfirmEmailController::class, 'index']) -> name('confirm-email');
