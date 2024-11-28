<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bttViewdemoController;

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

#Views
Route::get('/btt-view-1',function(){return view('view1');});
Route::get('/btt-view-2',function(){return view('view2',['name'=>'Welcome to, Devmaster']);});
Route::get('/btt-view-3',function(){return view('admin.view3',['name'=>'Quản trị nội dung']);});
Route::get('/btt-view-4',[bttViewdemoController::class,'view4'])->name('viewdemo.view4');
Route::get('/btt-view-5',[bttViewdemoController::class,'view5'])->name('viewdemo.view5');
Route::get('/btt-view-6',function(){return view('view6');});
