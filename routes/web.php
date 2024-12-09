<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukSayaController;
use App\Http\Controllers\ProductController;
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




Route::get('/', [ProdukSayaController::class, 'index'])->name('product_saya');
Route::get('/ProdukSaya', [ProdukSayaController::class, 'index'])->name('product_saya');

Route::get('/category',[KategoriController::class,'index'])->name('category');
Route::get('/category/tambah',[KategoriController::class,'tambah'])->name('category.tambah');
Route::post('/category/aksi_tambah',[KategoriController::class,'aksi_tambah'])->name('category.aksi_tambah');
Route::get('category/edit/{id}', [KategoriController::class, 'edit'])->name('category.edit');
Route::post('/category/{id}/aksi_edit', [KategoriController::class, 'aksi_edit'])->name('category.aksi_edit');
Route::post('/category/aksi_hapus/{id}', [KategoriController::class, 'aksi_hapus'])->name('category.aksi_hapus');

//Produk
Route::get('/product',[ProductController::class,'index'])->name('product');
Route::get ('product/tambah',[ProductController::class,'tambah'])->name('product.tambah');
Route::post('product/aksi_tambah',[ProductController::class,'aksi_tambah'])->name('product.aksi_tambah');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/aksi_edit{id}',[ProductController::class,'aksi_edit'])->name('product.aksi_edit');
Route::post('/product/aksi_hapus{id}',[ProductController::class,'aksi_hapus'])->name('product.aksi_hapus');
Route::get('/product/restoreProduct',[ProductController::class,'restoreProduct'])->name('product.restoreProduct');
