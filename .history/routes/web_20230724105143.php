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
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registeruser']);
Route::get('/login', [AuthController::class, 'lo'])->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::get('/users', 'App\Http\Controllers\UserController@index')->name('users');
Route::get('/users/{id}', 'App\Http\Controllers\UserController@show')->name('user.show');

