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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['register' => false]);

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/password', [App\Http\Controllers\Auth\ChangePasswordController::class, 'index'])->name('password');
    Route::post('/password/change', [App\Http\Controllers\Auth\ChangePasswordController::class, 'store'])->name('changePassword');
});

Route::middleware(['auth'])->prefix('panel')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/report', [App\Http\Controllers\Report\IndexController::class, 'index'])->name('report');
});

