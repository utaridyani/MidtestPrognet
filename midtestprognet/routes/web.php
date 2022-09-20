<?php

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

//dashboard
Route::get('/', ['App\Http\Controllers\DashboardController', 'index']);

//crud produk
Route::get('/produk', ['App\Http\Controllers\ProdukController', 'index']);
Route::get('/insertproduk', ['App\Http\Controllers\ProdukController', 'insert']);
Route::post('/createproduk', ['App\Http\Controllers\ProdukController', 'create']);
Route::get('/detailproduk/{id}', ['App\Http\Controllers\ProdukController', 'detail']);
Route::get('/updateproduk/{id}', ['App\Http\Controllers\ProdukController', 'update']);
Route::post('/saveupdate/{id}', ['App\Http\Controllers\ProdukController', 'saveupdate']);
Route::post('/produkdelete/{id}', ['App\Http\Controllers\ProdukController', 'destroy']);

//merk satuan dan supplier tidak bisa di update dan delete karena merupakan foreign key dari produk
//kolom foreign key tidak bisa di update atau delete
//crud merk
Route::get('/merk', ['App\Http\Controllers\MerkController', 'index']);
Route::get('/insertmerk', ['App\Http\Controllers\MerkController', 'insert']);
Route::post('/merkcreate', ['App\Http\Controllers\MerkController', 'create']);
Route::get('/detailmerk/{id}', ['App\Http\Controllers\MerkController', 'detail']);
//Route::get('/updatemerk/{id}', ['App\Http\Controllers\MerkController', 'update']);

//crud satuan
Route::get('/satuan', ['App\Http\Controllers\SatuanController', 'index']);
Route::get('/insertsatuan', ['App\Http\Controllers\SatuanController', 'insert']);
Route::post('/satuancreate', ['App\Http\Controllers\SatuanController', 'create']);
Route::get('/detailsatuan/{id}', ['App\Http\Controllers\SatuanController', 'detail']);

//crud supplier
Route::get('/supplier', ['App\Http\Controllers\SupplierController', 'index']);
Route::get('/insertsupplier', ['App\Http\Controllers\SupplierController', 'insert']);
Route::post('/suppliercreate', ['App\Http\Controllers\SupplierController', 'create']);
Route::get('/detailsupplier/{id}', ['App\Http\Controllers\SupplierController', 'detail']);


