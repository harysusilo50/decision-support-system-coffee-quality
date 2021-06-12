<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\BijiKopiController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\DataPenjualanController;

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



Route::get('/', [UserController::class, 'index'])->name('landing');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'storeRegister'])->name('storeRegister');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'storeLogin'])->name('storeLogin');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria');

Route::get('/data-penjualan', [DataPenjualanController::class, 'index'])->name('data-penjualan');

Route::get('/hasil', [HasilController::class, 'index'])->name('hasil');

Route::get('/biji-kopi', [BijiKopiController::class, 'index'])->name('biji-kopi');