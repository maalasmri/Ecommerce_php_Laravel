<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorldController;
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


Route::get('/', function(){
  return view('HomePage');
  
  })->name('HomePage');





Route::get('/checkout/{id}', [WorldController::class,'CheckOut']);
Route::get('/product', [WorldController::class,'PhoneType']);
Route::POST('/invoice', [WorldController::class,'invoice'])->name('invoice');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
