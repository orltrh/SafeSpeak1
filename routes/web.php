<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', 'App\Http\Controllers\UserController@index')
        ->name('index')->middleware('auth');
Route::get('/forum', 'App\Http\Controllers\UserController@forum')->middleware('auth');
Route::get('/trackingposition', 'App\Http\Controllers\UserController@tracking')->middleware('auth');
Route::get('/edukasi', 'App\Http\Controllers\UserController@edukasi')->middleware('auth');
Route::get('/panduan', 'App\Http\Controllers\UserController@panduan')->middleware('auth');
Route::get('/login', 'App\Http\Controllers\UserController@login')
        ->name('users.login')->middleware('guest'); 
Route::get('/register', 'App\Http\Controllers\UserController@register')->middleware('guest');
Route::get('/updateEdukasi', 'App\Http\Controllers\UserController@updateEdukasi')->middleware('auth');
Route::post('/login', [UserController::class,'authentic'])
        ->name('users.loginAuth');
Route::post('/', [UserController::class,'registerStore'])
        ->name('registers.store');
// Route::get('/regist', [UserController::class,'regist']);
// Route::post('/', [UserController::class,'registerStore'])
//         ->name('registers.store');
 



