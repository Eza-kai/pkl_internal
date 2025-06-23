<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\MyController;
use App\Http\Middleware\Admin;
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

Route::get('about', function () {
    return 'ini halaman about';
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('produk/{namaProduk}', function ($a) {
    return 'Saya Membeli : <b>'  .$a. '</b>';
});

Route::get('beli/{barang}/{jumlah}', function($a, $b){
    return view('beli', compact('a','b'));
});

Route::get('promo/{barang?}/{kode?}', function($a, $b = null ){
    return view('promo', compact('a','b'));
});

// Route SIswa


Route::get('siswa',[MyController::class, 'index']);
Route::get('siswa/create',[MyController::class, 'create']);
Route::post('/siswa', [MyController::class, 'store']);
Route::put('siswa/{id}/edit',[MyController::class, 'update']);
Route::get('siswa/{id}',[MyController::class, 'show']);
Route::delete('siswa/{id}',[MyController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin / Backend
Route::group(['prefix'=> 'admin', 'middleware'=> ['auth', Admin::class]], function () {
    Route::get('/', [BackendController::class, 'index']);
    // 
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', CategoryController::class);
        
    });
