<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Route::get('/', [BarangController::class,'getBarang']);
//create data
Route::get('/tambah-barang',[BarangController::class,'tambahBarang'])->name('tambah-barang');
Route::post('/create-barang',[BarangController::class,'createBarang'])->name('create-barang');

//update data
 Route::get('/edit-barang/{id}',[BarangController::class,'showEditBarang'])->name('edit-barang');
 Route::post('/editBarang/{id}',[BarangController::class,'editBarang'])->name('editBarang');

//delete data
 Route::get('/delete-barang/{id}',[BarangController::class,'destroyBarang'])->name('delete-barang');