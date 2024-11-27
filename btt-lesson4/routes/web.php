<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewdemoController;

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
Route::get('/view-1',function(){return view('view1');});
Route::get('/view-2',function(){return view('view2',['name'=>'Welcome to, Devmaster']);});
Route::get('/view-3',function(){return view('admin.view3',['name'=>'Quản trị nội dung']);});
Route::get('/view-4',[ViewdemoController::class,'view4'])->name('viewdemo.view4');
Route::get('/view-5',[ViewdemoController::class,'view5'])->name('viewdemo.view5');
Route::get('/view-6',function(){return view('view6');});
