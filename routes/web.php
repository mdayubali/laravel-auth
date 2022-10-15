<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomRegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('register',[App\Http\Controllers\CustomRegisterController::class,'registerShow'])->name('register');
Route::post('register',[CustomRegisterController::class,'registerUser'])->name('register.store');
