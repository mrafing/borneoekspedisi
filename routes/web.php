<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KemitraanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/', HomeController::class);
Route::get('/cekOngkir', [HomeController::class, 'cekOngkir']);
Route::get('/cariAgen', [HomeController::class, 'cariAgen']);
Route::get('/lacakPaket', [HomeController::class, 'lacakPaket']);

Route::get('/tentangKami', [AboutController::class, 'index']);
Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/kemitraan', [KemitraanController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
