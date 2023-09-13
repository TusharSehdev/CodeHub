<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
Route::get('/logout', [ProductController::class, 'logout']);
Route::view('/signin', 'signin');
Route::post('/signin',[UserController::class,'signin']);
Route::get('/',[ProductController::class,'index']);
Route::get('/test',[UserController::class,'test']);
Route::get('/detail/{id}',[ProductController::class,'detail']);
Route::get('/search',[ProductController::class,'search']);
Route::post('/add_to_cart',[ProductController::class,'addToCart']);
Route::get('/cart',[ProductController::class,'Cart']);
Route::get('/removecart/{id}',[ProductController::class,'removecart']);
Route::get('ordernow',[ProductController::class,'ordernow']);
