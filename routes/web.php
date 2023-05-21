<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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


//  user controller
Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('dashboard');
Route::get('/edukasi', [App\Http\Controllers\UserController::class, 'edukasi'])->name('edukasi');
Route::get('/panduan', [App\Http\Controllers\UserController::class, 'panduan'])->name('panduan');
Route::get('/forum', [App\Http\Controllers\UserController::class, 'forum'])->name('forum')->middleware('auth');


Route::get('/SubMateri/{data}', [App\Http\Controllers\UserController::class, 'showSubMateri'])->name('users.SubMateri');
Route::get('/Materi/{data}', [App\Http\Controllers\UserController::class, 'showMateri'])->name('users.Materi');



//  admin controller
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('checkMiddleware');
Route::get('/admin-tracking', [App\Http\Controllers\TrackingPositionController::class, 'adminShow'])->name('aTrackingPosition')->middleware('checkMiddleware');
Route::get('/admin-edukasi', [App\Http\Controllers\AdminController::class, 'edukasi'])->name('aEdukasi')->middleware('checkMiddleware');
Route::get('/admin-panduan', [App\Http\Controllers\AdminController::class, 'panduan'])->name('aPanduan')->middleware('checkMiddleware');
Route::get('/admin-forum', [App\Http\Controllers\AdminController::class, 'forum'])->name('aForum')->middleware('checkMiddleware');

Route::get('/adSelf-Awareness', [App\Http\Controllers\AdminController::class, 'adSelfAwareness'])->name('admins.adselfawareness')->middleware('checkMiddleware');
Route::get('/Self-Regulation', [App\Http\Controllers\AdminController::class, 'adSelfRegulation'])->name('admins.adselfregulation')->middleware('checkMiddleware');
Route::get('/Self-Adjustment', [App\Http\Controllers\AdminController::class, 'adSelfAdjustment'])->name('admins.adselfadjustment')->middleware('checkMiddleware');
Route::get('/Social-Skills', [App\Http\Controllers\AdminController::class, 'adSocialSkills'])->name('admins.adselfadjustment')->middleware('checkMiddleware');
Route::get('/Self-Motivation', [App\Http\Controllers\AdminController::class, 'adSelfMotivation'])->name('admins.adselfmotivation')->middleware('checkMiddleware');
Route::get('/Empathy', [App\Http\Controllers\AdminController::class, 'adEmpathy'])->name('admins.adempathy')->middleware('checkMiddleware');


Route::get('/admin-crud', [App\Http\Controllers\AdminController::class, 'crud'])->name('admins.crud');
Route::get('/admin-createEdukasi', [App\Http\Controllers\AdminController::class, 'createEdukasi'])->name('admins.createEdukasi')->middleware('checkMiddleware');
route::post('/admin-prosesCreate', [App\Http\Controllers\AdminController::class, 'prosesCreate'])->name('admins.prosesCreate')->middleware('checkMiddleware');

Route::get('/adSubMateri/{data}', [App\Http\Controllers\AdminController::class, 'showSubMateri'])->name('admins.adSubMateri')->middleware('checkMiddleware');
Route::get('/adMateri/{data}', [App\Http\Controllers\AdminController::class, 'showMateri'])->name('admins.adMateri')->middleware('checkMiddleware');

Route::get('/updateMateri/{data}', [App\Http\Controllers\AdminController::class, 'updateMateri'])->name('admins.updateMateri')->middleware('checkMiddleware');
route::post('/prosesUpdateMateri/{judul}', [App\Http\Controllers\AdminController::class, 'prosesUpdateMateri'])->name('admins.prosesUpdateMateri')->middleware('checkMiddleware');

Route::delete('/deleteMateri{data}', [App\Http\Controllers\AdminController::class, 'deleteMateri'])->name('admins.deleteMateri');


// route profil
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::post('/prosesFoto', [App\Http\Controllers\ProfileController::class, 'store'])->name('fotoPost');
Route::delete('/deleteFoto', [App\Http\Controllers\ProfileController::class, 'delete'])->name('fotoDelete');

// route profil
Route::get('/admin-profile', [App\Http\Controllers\ProfileController::class, 'adindex'])->name('adprofile')->middleware('auth');
Route::post('/admin-prosesFoto', [App\Http\Controllers\ProfileController::class, 'adstore'])->name('adfotoPost');
Route::delete('/admin-deleteFoto', [App\Http\Controllers\ProfileController::class, 'addelete'])->name('adfotoDelete');


// Route untuk tracking position
Route::get('/uptrackingposition', [TrackingPositionController::class, 'show'])->name('uptrackingposition')->middleware('auth');
Route::get('searchTrackingPosition', [TrackingPositionController::class, 'search'])->name('search.track');
Route::post('/updateMarkerPosition', 'App\Http\Controllers\TrackingPositionController@update')->name('updateMarkerPosition');






// FC

// route authentikasi
Auth::routes();


Auth::routes();

