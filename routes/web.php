<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LokerController;

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

Route::get('/login', function () {
    return view('welcome');
});

Route::get('home',[HomeController::class,'show']);
Route::get('profile',[HomeController::class,'index']);
Route::get('more',[HomeController::class,'more']);

Route::get('all',[LokerController::class,'index']);
Route::get('lowongan',[LokerController::class,'show'])->middleware('isLogin');
Route::post('buatloker',[LokerController::class,'buat']);


Route::get('admin',[UserController::class,'show'])->name('admin');
Route::get('dataAlumni',[UserController::class,'index']);
Route::get('dashboard',[UserController::class,'dash']);
Route::get('dataLoker',[UserController::class,'data']);
Route::post('loker/update/{id}',[UserController::class,'update']);

Route::get('register',[UserController::class,'register']);
Route::post('register/create',[UserController::class,'create']);
Route::post('/auth',[UserController::class,'auth']);
Route::get('logout',[UserController::class,'logout'])->middleware('isLogin');
