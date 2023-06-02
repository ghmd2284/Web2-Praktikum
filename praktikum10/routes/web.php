<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Bikin routing ke dashboard admin
Route::get('/dashboard', [DashboardController::class, 'index']);

// Bikin routing ke produk admin
Route::get('/produk', [ProdukController::class, 'index']);


//Bikin routing ke home 
Route::get('/home', [HomeController::class, 'index']);

//Bikin routing ke about
Route::get('/about', [AboutController::class, 'index']);

//Bikin routing ke shop
Route::get('/shop', [ShopController::class, 'index']);

//Bikin routing ke contact
Route::get('/contact', [ContactController::class, 'index']);

//Bikin Routing ke Kategori Prodk
Route::get('/kategori', [KategoriProdukController::class, 'index']);