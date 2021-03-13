<?php

use App\Http\Controllers\Auth\Register\RegisterControllerStep1;
use App\Http\Controllers\Auth\Register\RegisterControllerStep2;
use App\Http\Controllers\Auth\Register\RegisterControllerStep3;
use App\Http\Controllers\Auth\Register\RegisterControllerStep4;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/auth/register/1', [RegisterControllerStep1::class, 'index']);
// Route::get('/auth/register/2', [RegisterControllerStep2::class, 'index']);
// Route::get('/auth/register/3', [RegisterControllerStep3::class, 'index']);
// Route::get('/auth/register/4', [RegisterControllerStep4::class, 'index']);

Route::multistep('auth/register', 'App\Http\Controllers\Auth\Register\RegisterController')->steps(4)->name('auth.register');
