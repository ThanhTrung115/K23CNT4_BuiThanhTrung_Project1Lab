<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bttAccountController;
use App\Http\Controllers\DB;

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

#Route Account Controller
Route::get('/btt-account',[bttAccountController::class,'index'])->name('account.index');
Route::get('/btt-account-create',[bttAccountController::class,'create'])->name('account.create');
Route::get('/btt-account-show',[bttAccountController::class,'showData'])->name('account.show');
Route::get('/btt-account-list',[bttAccountController::class,'list'])->name('account.list');
Route::get('/btt-account-getall',[bttAccountController::class,'getAllAccount'])->name('account.getallaccount');