<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PengirimanController;


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
Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});

//set up BACKEND
Route::get('/dasboard', [DasboardController::class, 'index'])->name('dasboard');

Route::resource('barang', BarangController::class);
 Route::resource('lokasi', LokasiController::class);
Route::resource('pengirim', PengirimanController::class);







