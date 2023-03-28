<?php

use App\Http\Controllers\KategoriController;
<<<<<<< HEAD
use App\Http\Controllers\ProdukController;
=======
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
<<<<<<< HEAD
    Route::get('/kategori/data', [KategoriController::class, 'data'])->name('kategori.data');
    Route::resource('/kategori', KategoriController::class);
});

Route::get('/produk/data', [ProdukController::class, 'data'])->name('produk.data');
Route::post('/produk/delete-selected', [ProdukController::class, 'deleteSelected'])->name('produk.delete_selected');
Route::post('/produk/cetak-barcode', [ProdukController::class, 'cetakBarcode'])->name('produk.cetak_barcode');
Route::resource('/produk', ProdukController::class);
=======
    Route::get('/kategori/data', [KategoriController::class, 'data']);
    Route::resource('/kategori', KategoriController::class);
});
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
