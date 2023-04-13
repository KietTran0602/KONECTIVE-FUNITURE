<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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
    return view('index');
});
Route::get('/loginadmin', function () {
    return view('loginadmin');
});
Route::get('/index',[LoginController::class,'show']);
Route::post('/index',[LoginController::class,'signin']);
Route::get('/login',[LoginController::class,'shows']);
Route::post('/login',[LoginController::class,'signup']);