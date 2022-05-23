<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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


Route::get("/",[App\Http\Controllers\ProductController::class, 'index']);

Route::get("product_details/{id}",[App\Http\Controllers\ProductController::class, 'details']);

Route::get("product_search",[App\Http\Controllers\ProductController::class, 'search']);

Route::post("add_to_cart",[App\Http\Controllers\ProductController::class, 'add_to_cart']);

Route::get("cartList",[App\Http\Controllers\ProductController::class, 'cartList']);
Route::get("removecart/{id}",[App\Http\Controllers\ProductController::class, 'removecart']);
Route::get("orderNow",[App\Http\Controllers\ProductController::class, 'orderNow']);
Route::post("orderPlace",[App\Http\Controllers\ProductController::class, 'orderPlace']);
Route::get("myOrders",[App\Http\Controllers\ProductController::class, 'myOrders']);

