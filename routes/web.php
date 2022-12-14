<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', [HomeController::class, 'dashboard']) -> name('dashboard');


Route::get('/login', [HomeController::class, 'regular']) -> name('regular');


Route::get('/login', [HomeController::class, 'login']) -> name('login');

Route::get('/inscription', [HomeController::class, 'register']) -> name('inscription');
