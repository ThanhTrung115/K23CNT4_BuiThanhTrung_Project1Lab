<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BttSinhVienController;

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

Route::get('/sinhvien',[BttSinhVienController::class,'bttList'])->name('sinhvien.list');
Route::get('/sinhvien/create',[BttSinhVienController::class,'bttCreate'])->name('sinhvien.create');
Route::post('/sinhvien/create',[BttSinhVienController::class,'bttCreateSubmit'])->name('sinhvien.createsubmit');