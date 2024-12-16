<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BttLoginController;
use App\Http\Controllers\BttSessionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [BttLoginController::class, 'login']);
Route::post('/login', [BttLoginController::class, 'loginSubmit'])->name('loginSubmit');
Route::get('/logout', [BttLoginController::class, 'logout'])->name('logout');

Route::get('/session/get', [BttSessionController::class,'bttGetSessionData'])->name('bttsession.get');
Route::get('/session/set', [BttSessionController::class,'bttStoreSessionData'])->name('bttsession.set');
Route::get('/session/del', [BttSessionController::class,'bttDeleteSessionData'])->name('bttsession.del');