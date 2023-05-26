<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProfileController;

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
Route::get('/loginadmin', function () {return view('loginadmin');});
Route::get('/login',[LoginController::class,'shows']);
Route::post('/login',[LoginController::class,'signup']);
Route::get('/welcome',[LoginController::class,'signout']);
Route::post('/home',[LoginController::class,'signin']);
Route::get('/',[IndexController::class,'show']);
Route::get('/home',[IndexController::class,'show']);
// Route::get('/home',[LoginController::class,'signout']);
Route::get('/product',[IndexController::class,'show']);
Route::get('/furniture-set',[IndexController::class,'show']);
Route::get('/policy',[IndexController::class,'show']);
Route::get('/contact',[IndexController::class,'show']);
Route::get('/profile', function () {return view('profile');});
Route::post('/profile',[ProfileController::class,'avatar']);
Route::get('/profile',[ProfileController::class,'showavatar']);





