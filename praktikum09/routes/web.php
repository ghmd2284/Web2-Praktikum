<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;
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

// Bikin Route Kabar Nampilin view kondisi

Route::get('/kabar', function () {
    return view('kondisi');
});

// Bikin route nilai nampilin view nilai

Route::get('/nilai', function () {
    return view('nilai');
});

// Bikin route pasien 
Route::get('/pasien', function () {
    return view('pasien');
});

// bikin route form
Route::get('/form', [FormController::class, 'index']);

// bikin route POST hasil form 
Route::post('/hasil', [FormController::class, 'hasil']);

// bikin route form skill
Route::get('/skill', [SkillController::class, 'skill']);

// bikin route hasil form skill
Route::post('/skillhasil', [SkillController::class, 'skillhasil']);