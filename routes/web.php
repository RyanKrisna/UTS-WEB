<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PenjahitController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DataPenjahitController;
use App\Models\KelompokTani;
use App\Http\Controllers\PanenController;
use App\Http\Controllers\addPanenController;
use App\Http\Controllers\PetaniController;


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

Route::get('/',[HomeController::class, 'index']);
Route::get('/baju',[BajuController::class, 'index']);
Route::get('/keranjang',[KeranjangController::class, 'index']);
Route::get('/penjahit',[PenjahitController::class, 'index']);
Route::get('/produk',[ProdukController::class, 'index']);
Route::get('/data_penjahit',[DataPenjahitController::class, 'index'])->name('datapenjahit');
Route::get('/data_penjahit/detail/{id_penjahit}',[DataPenjahitController::class, 'detail']);
Route::get('/data_penjahit/add',[DataPenjahitController::class, 'add']);
Route::post('/data_penjahit/insert',[DataPenjahitController::class, 'insert']);
Route::get('/data_penjahit/edit/{id_penjahit}',[DataPenjahitController::class, 'edit']);
Route::get('/data_penjahit/delete/{id_penjahit}',[DataPenjahitController::class, 'delete']);

Route::resource('panen',PanenController::class);

Route::get('/addpanen',[PanenController::class, 'create']);
Route::post('/addpanen/store',[PanenController::class, 'store']);

Route::get('/daftarpetani', [Petani1Controller::class, 'index']);

Route::get('/addPetani', [Petani1controller::class, 'create']);