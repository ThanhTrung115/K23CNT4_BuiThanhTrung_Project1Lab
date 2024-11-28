<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamedProfileController;

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

Route::get('/greeting', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/devmaster', function () {
    return '<h1>Welcome to Devmaster Academy</h1>';
});

Route::get('/devmaster/{id}', function ($id) {
    return '<h1>Devmaster '.$id;
});

Route::redirect('/here', '/there');
Route::get('/there', function () {
    return '<h1>Redirect: here to there</h1>';
});

Route::get('/thanh-trung', function () {
    return view('thanhtrung');
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "<h1> Posts: $postId ; Comments: $commentId";
});

Route::get('/user/{id}', function (Request $request, $id) {
    return '<h1> User -> '.$id;
});

Route::get('/dev/{name?}', function ($name = null) {
    return "<h1>Welcome to, $name";
});

Route::get('/user-dev/{name?}', function ($name = 'Thành Trung') {
    return "<h1>Welcome to, $name";
});

Route::get('/user-constraint/{name}', function ($name) {
    return "<h1> Route Constraint [A-Za-z]+";
}) ->where('name', '[A-Za-z ]+');

Route::get('/user-constraint/{id}', function ($name) {
    return "<h1> Route Constraint [0-9]+";
}) ->where('id', '[0-9]+');

Route::get('/user-constraint/{id}/{name}', function ($id, $name) {
    return "<h1> Route Constraint ['id' => '[0-9]+', 'name' => '[a-z]+']";
}) ->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/user-check/{id}/{name}', function ($id, $name) {
    return "<h1> user-check whereNumber('id')->whereAlpha('name') [$id, $name]";
}) ->whereNumber('id')->whereAlpha('name');

Route::get('/user-check/{name}', function ($name) {
    return "<h1> user-check whereAlphaNumeric('name') => [$name]";
}) ->whereAlphaNumeric('name');

Route::get('/user-check/{id}', function ($id) {
    return "<h1> user-check whereUuid('id') => [$id]";
}) ->whereUuid('id');

#Encoded Forward Slashes
Route::get('/search/{search?}', function ($search) {
    return "<h1> Tham số trên url là unicode: $search </h1>";
})->where('search', '.*');

#Named Route
Route::get('/named/profile',function() {
    return "<h1> Đặt tên cho Route </h1>";
})->name('named.profile');
Route::get('/named/display',[bttNamedProfileController::class, 'display'])->name('display.profile');
Route::get('/named/show',[bttNamedProfileController::class, 'show']);

#Route Group Prefix
Route::group(['prefix'=>'admin'],function() {
    Route::get('/',function(){ return "<h1> Admin Home </h1>";});
    Route::get('/account',function(){ return "<h1> Admin Account </h1>";});
    Route::get('/product',function(){ return "<h1> Admin Product </h1>";});
});
