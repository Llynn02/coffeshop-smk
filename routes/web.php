<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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

Route::get('/login',[LoginController::class, 'login']
)->name('login');

//proses authenticate untuk bisa login
Route::post('/authenticate', [LoginController::class, 'loginauth']
)->name('authenticate');

//proses logot dengan method get
Route::get('/logout',[LoginController::class, 'logout']
)->name('logout');

Route::get('/', function () {
    return view('welcome'); 
})->name('dashboard');

Route::group(['middleware' => ['auth','authorization:owner']], function(){

//tampil halaman tambah akun
Route::get('/manageaccount',[LoginController::class, 'manageaccount']
)->name('manageaccount');

// rute registrasi akun
Route::post('/createaccount', [LoginController::class, 'createaccount']
)->name('createaccount');

//route dengan method get untuk menamplkan tabel di halaman produk
Route::get('/product', [ProductController::class, 'productread']
)->name('product');

//route dengan method get untuk menamplkan form insert di halaman insert produk
Route::get('/insertproduct', [ProductController::class, 'insertproduct']
)->name('insertproduct');

//route dengan method post untuk run task fitur create/insert di halaman produk
Route::post('/createproduct',[ProductController::class, 'createproduct']
)->name('createproduct');

//route dengan method get untuk acces fitur search di halaman produk
Route::get('/searchproduct', [ProductController::class, 'searchproduct']
)->name('searchproduct');

//route untuk menampilkan data berdasarkan Id pada halaman edit
Route::get('/editproduct/{id}', [ProductController::class, 'editproduct']
)->name('editproduct');

//route dengan method post untuk run task fitur create/insert di halaman produk
Route::post('/updateproduct/{id}',[ProductController::class, 'updateproduct']
)->name('updateproduct');

//route dengan method get id untuk menghapus data product
Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct']
)->name('deleteproduct');

});