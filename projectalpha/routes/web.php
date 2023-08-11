<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\LogInController;
use App\Models\RegisterModel;
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
Route::get('/customers', [RegisterController::class,'customers']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/LogIn', [LogInController::class, 'index']);
Route::get('customers/delete/{id}', [RegisterController::class, 'delete'])->name('customer.delete');
Route::get('customers/edit/{id}', [RegisterController::class, 'edit'])->name('register.edit');