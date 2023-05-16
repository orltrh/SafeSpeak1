<?php

use App\Events\MessageCreated;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrackingPositionController;
use Illuminate\Support\Facades\Auth;

use App\Events\HelloEvent;
use Illuminate\Http\Request;

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


// route register login
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Route::post('/prosesRegister', [App\Http\Controllers\Auth\RegisterController::class, 'registeruser'])->name('registerPost');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/prosesLogin', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('loginPost');
Route::post('/logout', [App\Http\Controllers\Auth\loginController::class, 'logout'])->name('logout');


// route user
Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('dashboard');
// Route::get('/upTracking-position', [App\Http\Controllers\UserController::class, 'trackingPosition'])->name('trackingPosition')->middleware('auth');
Route::get('/edukasi', [App\Http\Controllers\UserController::class, 'edukasi'])->name('edukasi');
Route::get('/panduan', [App\Http\Controllers\UserController::class, 'panduan'])->name('panduan');
Route::get('/forum', [App\Http\Controllers\UserController::class, 'forum'])->name('forum')->middleware('auth');

Route::get('/self-awareness', [UserController::class, 'selfawareness'])->name('admins.selfawareness');
Route::get('/self-regulation', [UserController::class, 'selfregulation'])->name('admins.selfregulation');
Route::get('/self-adjustment', [UserController::class, 'selfadjustment'])->name('admins.selfadjustment');
Route::get('/self-motivation', [UserController::class, 'selfmotivation'])->name('admins.selfmotivation');
Route::get('/empathy', [UserController::class, 'empathy'])->name('admins.empathy');
Route::get('/social-skills', [UserController::class, 'socialskills'])->name('admins.socialskills');


// route admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('checkMiddleware');
Route::get('/admin-tracking', [App\Http\Controllers\TrackingPositionController::class, 'show'])->name('aTrackingPosition')->middleware('checkMiddleware');
Route::get('/admin-edukasi', [App\Http\Controllers\AdminController::class, 'edukasi'])->name('aEdukasi')->middleware('checkMiddleware');
Route::get('/admin-panduan', [App\Http\Controllers\AdminController::class, 'panduan'])->name('aPanduan')->middleware('checkMiddleware');
Route::get('/admin-forum', [App\Http\Controllers\AdminController::class, 'forum'])->name('aForum')->middleware('checkMiddleware');

Route::get('/admin-adSelfAwareness', [AdminController::class, 'adSelfAwareness'])->name('admins.adselfawareness')->middleware('checkMiddleware');
Route::get('/admin-adselfregulation', [AdminController::class, 'adselfregulation'])->name('admins.adselfregulation')->middleware('checkMiddleware');
Route::get('/admin-adselfadjustment', [AdminController::class, 'adselfadjustment'])->name('admins.adselfadjustment')->middleware('checkMiddleware');
Route::get('/admin-adselfmotivation', [AdminController::class, 'adselfmotivation'])->name('admins.adselfmotivation')->middleware('checkMiddleware');
Route::get('/admin-adempathy', [AdminController::class, 'adempathy'])->name('admins.adempathy')->middleware('checkMiddleware');
Route::get('/admin-adsocialskills', [AdminController::class, 'adsocialskills'])->name('admins.adsocialskills')->middleware('checkMiddleware');

Route::get('/admin-create', [AdminController::class, 'create'])->name('admins.create')->middleware('checkMiddleware');
Route::post('/admin', [AdminController::class, 'store'])->name('admins.store')->middleware('checkMiddleware');
Route::get('/admin-update', [AdminController::class, 'edit'])->name('admins.edit')->middleware('checkMiddleware');
Route::patch('/update', [AdminController::class, 'update'])->name('admins.update')->middleware('checkMiddleware');
Route::get('/admin-delete', [AdminController::class, 'delete'])->name('admins.del')->middleware('checkMiddleware');
Route::get('/delete', [AdminController::class, 'destroy'])->name('admins.destroy')->middleware('checkMiddleware');

// route profil
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile')->middleware('auth');



// Route untuk tracking position
Route::get('/uptrackingposition', [TrackingPositionController::class, 'show'])->name('uptrackingposition')->middleware('auth');
Route::get('create-track', [TrackingPositionController::class, 'index']);
Route::post('create-track', [TrackingPositionController::class, 'store'])->name('create.track');
    
// // route untuk search
Route::get('searchTrackingPosition', [TrackingPositionController::class, 'search'])->name('search.track');
Route::post('/updateMarkerPosition', 'App\Http\Controllers\TrackingPositionController@update')->name('updateMarkerPosition');

// FC

// route authentikasi
Auth::routes();

