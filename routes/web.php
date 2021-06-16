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
Route::get('/kriteria/{kriteria}', [KriteriaController::class, 'edit'])->name('kriteria.edit');
Route::put('/kriteria/{kriteria}', [KriteriaController::class, 'storeEdit'])->name('kriteria.edit.post');
Route::delete('/kriteria/{kriteria}', [KriteriaController::class, 'destroy'])->name('kriteria.delete');

Route::get('/data-penjualan', [DataPenjualanController::class, 'index'])->name('data-penjualan');
Route::post('/data-penjualan', [DataPenjualanController::class, 'storeTambah'])->name('store-data-penjualan');
Route::get('/data-penjualan/{bijikopi}', [DataPenjualanController::class, 'edit'])->name('data-penjualan.edit');
Route::put('/data-penjualan/{bijikopi}', [DataPenjualanController::class, 'storeEdit'])->name('ata-penjualan.edit.post');
Route::delete('/data-penjualan/{datapenjualan}', [DataPenjualanController::class, 'destroy'])->name('data-penjualan.delete');

Route::get('/hasil', [HasilController::class, 'index'])->name('hasil');

Route::get('/biji-kopi', [BijiKopiController::class, 'index'])->name('biji-kopi');
Route::post('/biji-kopi/tambah', [BijiKopiController::class, 'storeTambah'])->name('store-biji-kopi');
Route::get('/biji-kopi/{bijikopi}', [BijiKopiController::class, 'edit'])->name('biji-kopi.edit');
Route::put('/biji-kopi/{bijikopi}', [BijiKopiController::class, 'storeEdit'])->name('biji-kopi.edit.post');
Route::delete('/biji-kopi/{bijikopi}', [BijiKopiController::class, 'destroy'])->name('biji-kopi.delete');
