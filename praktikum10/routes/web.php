<?php

use App\Http\Controllers\TampilanController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware' => ['auth']], function () {
    Route::get('/after_register', function () {
        return view('after_register');
    });

    // Buat route untuk peran admin dan manager
    Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
        // Bikin routing ke dashboard admin
        Route::get('/dashboard', [DashboardController::class, 'index']);

        // Bikin routing ke produk admin
        Route::get('/produk', [ProdukController::class, 'index']);
        Route::prefix('produk')->group(function () {
            //Bikin Routing ke create produk
            Route::get('/create', [ProdukController::class, 'create']);
            //Bikin Routing ke Store
            Route::post('/store', [ProdukController::class, 'store'])->name('produk/store');
            // Route edit produk by id
            Route::get('/edit/{id}', [ProdukController::class, 'edit']);
            // route update produk by id
            Route::put('/update/{id}', [ProdukController::class, 'update']);

            Route::get('/delete/{id}', [ProdukController::class, 'destroy']);
        });

        //Bikin Routing ke Kategori Prodk
        Route::get('/kategori', [KategoriProdukController::class, 'index']);
        Route::prefix('kategori')->group(function () {
            //Bikin Routing ke create produk
            Route::get('/create', [KategoriProdukController::class, 'create']);
            //Bikin Routing ke Store
            Route::post('/store', [KategoriProdukController::class, 'store'])->name('kategpri/store');
            // Route edit produk by id
            Route::get('/edit/{id}', [KategoriProdukController::class, 'edit']);
            // route update produk by id
            Route::put('/update/{id}', [KategoriProdukController::class, 'update']);

            Route::get('/delete/{id}', [KategoriProdukController::class, 'destroy']);
        });
    });
});


Route::get('/tampil', [TampilanController::class, 'index']);

//Bikin routing ke home 
Route::get('/', [PageController::class, 'index']);

//Bikin routing ke about
Route::get('/about', [AboutController::class, 'index']);

//Bikin routing ke shop
Route::get('/shop', [ShopController::class, 'index']);

//Bikin routing ke contact
Route::get('/contact', [ContactController::class, 'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
