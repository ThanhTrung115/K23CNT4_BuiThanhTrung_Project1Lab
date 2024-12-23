<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BTT_LOAI_SAN_PHAMController;
use App\Http\Controllers\BTT_SAN_PHAMController;

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

Route::get('/admins/btt-login',[BTT_QUAN_TRIController::class,'bttLogin'])->name('admins.bttLogin');
Route::post('admins/btt-login',[BTT_QUAN_TRIController::class,'bttLoginSubmit'])->name('admins.bttLoginSubmit');

#Admins - Route
Route::get('/btt-admins',function(){
    return view('bttAdmins.index');
});

Route::get('/btt-admins/btt-loai-san-pham',[BTT_LOAI_SAN_PHAMController::class,'bttList'])->name('bttadmins.bttloaisanpham');
Route::get('/btt-admins/btt-loai-san-pham/btt-create',[BTT_LOAI_SAN_PHAMController::class,'bttCreate'])->name('bttadmins.bttloaisanpham.bttcreate');
Route::post('/btt-admins/btt-loai-san-pham/btt-create',[BTT_LOAI_SAN_PHAMController::class,'bttCreateSubmit'])->name('bttadmins.bttloaisanpham.bttcreatesubmit');
#Edit
Route::get('/btt-admins/btt-loai-san-pham/btt-edit/{id}',[BTT_LOAI_SAN_PHAMController::class,'bttEdit'])->name('bttadmins.bttloaisanpham.bttedit');
Route::post('/btt-admins/btt-loai-san-pham/btt-edit',[BTT_LOAI_SAN_PHAMController::class,'bttEditSubmit'])->name('bttadmins.bttloaisanpham.btteditsubmit');

#SanPham
Route::get('/btt-admins/btt-san-pham',[BTT_SAN_PHAMController::class,'bttList'])->name('bttadmins.bttsanpham');
Route::get('/btt-admins/btt-san-pham/btt-create',[BTT_SAN_PHAMController::class,'bttCreate'])->name('bttadmins.bttsanpham.bttcreate');
Route::post('/btt-admins/btt-san-pham/btt-create',[BTT_SAN_PHAMController::class,'bttCreateSubmit'])->name('bttadmins.bttsanpham.bttcreatesubmit');


