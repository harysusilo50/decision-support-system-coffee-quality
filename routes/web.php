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

Route::get('/test', [UserController::class, 'test'])->name('test');
Route::post('/test', [UserController::class, 'testStore'])->name('test.post');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'storeRegister'])->name('storeRegister');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'storeLogin'])->name('storeLogin');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria');
Route::post('/kriteria/tambah', [KriteriaController::class, 'storeTambah'])->name('store-kriteria');
Route::delete('/kriteria/{kriteria}', [KriteriaController::class, 'destroy'])->name('kriteria.delete');

Route::get('/data-penjualan', [DataPenjualanController::class, 'index'])->name('data-penjualan');

Route::get('/hasil', [HasilController::class, 'index'])->name('hasil');

Route::get('/biji-kopi', [BijiKopiController::class, 'index'])->name('biji-kopi');
Route::post('/biji-kopi/tambah', [BijiKopiController::class, 'storeTambah'])->name('store-biji-kopi');
Route::delete('/biji-kopi/{bijikopi}', [BijiKopiController::class, 'destroy'])->name('biji-kopi.delete');
