<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//frontend
Route::get('/home','App\Http\Controllers\FrontendController@home')->name('home');
route::get('/product-detail/{slug}','App\Http\Controllers\FrontendController@productDetail')->name('product-detail');
