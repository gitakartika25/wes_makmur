<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('admin.index');
});
Route::get('/userr', function () {
    return view('master_user');
});

Auth::routes();

//halaman admin
Route::resource('produk', ProdukController::class);
Route::resource('post', PostController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('user', EditorController::class);

Route::get('produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');

Route::get('produk/hide/{id}', [ProdukController::class, 'hide'])->name('produk.hide');
Route::get('produk/show/{id}', [ProdukController::class, 'show'])->name('produk.show');
Route::get('post/hide/{id}', [PostController::class, 'hide'])->name('post.hide');
Route::get('post/show/{id}', [PostController::class, 'show'])->name('post.show');

Route::get('kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::get('user/edit/{id}', [EditorController::class, 'edit'])->name('user.edit');

Route::get('deleteproduk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
Route::get('deletepost/{id}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('deletekategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
Route::get('deleteuser/{id}', [EditorController::class, 'destroy'])->name('user.destroy');

//halaman user
Route::get('beranda', [BerandaController::class, 'index'])->name('beranda.index');
Route::get('detailpostingan/{id}', [BerandaController::class, 'detailpostingan'])->name('beranda.detail');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
