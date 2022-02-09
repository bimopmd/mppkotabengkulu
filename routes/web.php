<?php

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// Route::view('/','auth.login');
// Auth::routes();
Route::get('/', [App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
Route::post('/', [App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class,'index']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
