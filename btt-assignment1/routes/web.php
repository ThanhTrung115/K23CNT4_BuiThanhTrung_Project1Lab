<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BttRegistrationController;

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

Route::get('/register', [BttRegistrationController::class, 'index'])->name('register');
Route::post('/register-submit', [BttRegistrationController::class, 'registerSubmit'])->name('registerSubmit');
