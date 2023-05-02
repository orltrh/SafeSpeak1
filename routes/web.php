<?php

use App\Events\MessageCreated;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', 'App\Http\Controllers\UserController@index');
Route::get('/trackingposition', 'App\Http\Controllers\UserController@tracking');
Route::get('/edukasi', 'App\Http\Controllers\UserController@edukasi');
Route::get('/panduan', 'App\Http\Controllers\UserController@panduan');
Route::get('/forum', 'App\Http\Controllers\UserController@forum');


Route::get('/login', 'App\Http\Controllers\UserController@login')
    ->name('users.login');

Route::get('/register', 'App\Http\Controllers\UserController@register');

Route::post('/login', [UserController::class,'authentic'])
        ->name('users.loginAuth');
Route::post('/', [UserController::class,'registerStore'])
        ->name('registers.store');

Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/admin-forum', 'App\Http\Controllers\AdminController@forum');
Route::get('/admin-trackingposition', 'App\Http\Controllers\AdminController@tracking');
Route::get('/admin-edukasi', 'App\Http\Controllers\AdminController@edukasi');
Route::get('/admin-panduan', 'App\Http\Controllers\AdminController@panduan');


Route::get('/admin-adselfawareness', [AdminController::class, 'adselfawareness'])
    ->name('admins.adselfawareness');
Route::get('/selfawareness', [UserController::class, 'selfawareness'])
    ->name('admins.selfawareness');

Route::get('/admin-adselfregulation', [AdminController::class, 'adselfregulation'])
    ->name('admins.adselfregulation');
Route::get('/selfregulation', [UserController::class, 'selfregulation'])
    ->name('admins.selfregulation');

Route::get('/admin-adselfadjustment', [AdminController::class, 'adselfadjustment'])
    ->name('admins.adselfadjustment');
Route::get('/selfadjustment', [UserController::class, 'selfadjustment'])
    ->name('admins.selfadjustment');

Route::get('/admin-adselfmotivation', [AdminController::class, 'adselfmotivation'])
    ->name('admins.adselfmotivation');
Route::get('/selfmotivation', [UserController::class, 'selfmotivation'])
    ->name('admins.selfmotivation');

Route::get('/admin-adempathy', [AdminController::class, 'adempathy'])
    ->name('admins.adempathy');
Route::get('/empathy', [UserController::class, 'empathy'])
    ->name('admins.empathy');

Route::get('/admin-adsocialskills', [AdminController::class, 'adsocialskills'])
    ->name('admins.adsocialskills');
Route::get('/socialskills', [UserController::class, 'socialskills'])
    ->name('admins.socialskills');


Route::get('/admin-create', [AdminController::class, 'create'])
    ->name('admins.create');

Route::post('/admin', [AdminController::class, 'store'])
    ->name('admins.store');

Route::get('/admin-update', [AdminController::class, 'edit'])
    ->name('admins.edit');

Route::patch('/update', [AdminController::class, 'update'])
    ->name('admins.update');

Route::get('/admin-delete', [AdminController::class, 'delete'])
    ->name('admins.del');



Route::get('/delete', [AdminController::class, 'destroy'])
    ->name('admins.destroy');


// Route::get('/forum', 'App\Http\Controllers\UserController@forum');


Route::get('/send-event', function(Request $request) {
    $text = $request->input('message');
    broadcast(new HelloEvent($text))->toOthers();
    return response()->json(['message' => 'Success'], 200);
});












