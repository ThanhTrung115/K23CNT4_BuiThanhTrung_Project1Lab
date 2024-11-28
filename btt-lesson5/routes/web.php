<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BttProductController;

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

Route::get('/', [BttProductController::class,'bttindex']);

#Views
Route::get('/btt-view-1',function(){return view('view-1',['name'=>'Devmaster Academy']);});
Route::get('/btt-view-2',function(){
    return view('view-2',[
        'name'=>'Devmaster Academy!',
        'arr'=>[1,4,7,2,9],
    ]);
});
Route::get('/btt-view-3',function(){
    return view('view-3',[
        'name'=>["Devmaster","Academy","Thành","Trung"],
        'arr'=>[10,15,12,1,22,30],
        'users'=>[],
    ]);
});

#Template Blade Layout
Route::get('/home',function(){
    return view('index');
});

Route::get('/about-us',function(){
    return view('about');
});

Route::get('/contact-us',function(){
    return view('contact');
});