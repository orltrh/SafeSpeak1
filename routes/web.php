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

Route::get('/', 'App\Http\Controllers\UserController@index');
Route::get('/forum', 'App\Http\Controllers\UserController@forum');
Route::get('/trackingposition', 'App\Http\Controllers\UserController@tracking');
Route::get('/edukasi', 'App\Http\Controllers\UserController@edukasi');
Route::get('/panduan', 'App\Http\Controllers\UserController@panduan');
Route::get('/login', 'App\Http\Controllers\UserController@login');
Route::get('/register', 'App\Http\Controllers\UserController@register');

