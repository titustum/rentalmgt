<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('welcome'); });
Route::get('/create', function () { return view('create'); });
Route::get('/create2', function () { return view('create2'); });
Route::get('/pay', function () { return view('pay'); });


Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('user.dashboard');

// posts
Route::post('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/user/other', [App\Http\Controllers\UserController::class, 'otherDetails'])->name('user.other');
Route::post('/user/pay', [App\Http\Controllers\UserController::class, 'createPay'])->name('user.pay');
Route::post('/user/login', [App\Http\Controllers\UserController::class, 'login'])->name('user.login');
Route::get('/user/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('user.logout');
