<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('users',[UserController::class,'index'])->name('users.index');
Route::get('create',[UserController::class,'showFormCreate'])->name('users.showForm');
Route::post('create',[UserController::class,'create'])->name('users.create');


Route::get('register',[AuthController::class, 'showForm'])->name('showFormRegister');
Route::post('register',[AuthController::class, 'register'])->name('register')->middleware('checkRegister');


Route::get('login',[AuthController::class,'showFormLogin'])->name('showFormLogin');
Route::post('login',[AuthController::class,'login'])->name('login');
