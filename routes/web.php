<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DashboardController;
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

route::get('/',[StoreController::class,'index']);

route::get('/buy/{penjualan:slug}',[BuyController::class,'index']);
route::get('/checkout/{penjualan:name}',[BuyController::class,'buy']);
route::post('/checkout/{penjualan:harga}',[BuyController::class,'buyer']);


route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
route::post('/login',[LoginController::class,'login']);
route::post('/logout',[LoginController::class,'logout']);

route::get('/registrasi',[RegistrasiController::class,'index']);
route::post('/registrasi',[RegistrasiController::class,'store']);

route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
route::get('/dashboard/post',[DashboardController::class,'post'])->middleware('auth');
route::get('/dashboard/create',[DashboardController::class,'create'])->middleware('auth');
route::post('/dashboard/create',[DashboardController::class,'created'])->middleware('auth');
route::delete('/dashboard/delete/{penjualan:slug}',[DashboardController::class,'delete'])->middleware('auth');
route::get('/dashboard/update/{penjualan:slug}',[DashboardController::class,'update'])->middleware('auth');
route::put('/dashboard/update/{penjualan:slug}',[DashboardController::class,'updated'])->middleware('auth');