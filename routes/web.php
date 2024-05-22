<?php

use App\Http\Controllers\AyamController;
use App\Http\Controllers\KandangController;
use App\Http\Controllers\PakanController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TelurController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

// Route::get('reset_password', function(){
//     User::where('email','admin@gmail.com')->update(['password'=>\Hash::make('123')]);
// });

// Route::get('reset_password', function(){
//     User::where('email','karyawan1@gmail.com')->update(['password'=>\Hash::make('123')]);
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kandang/cetak', [KandangController::class, 'cetak']);
Route::get('/ayam/cetak', [AyamController::class, 'cetak']);
Route::get('/telur/cetak', [TelurController::class, 'cetak']);
Route::get('/produk/cetak', [ProdukController::class, 'cetak']);
Route::get('/penjualan/cetak', [PenjualanController::class, 'cetak']);
Route::get('/pakan/cetak', [PakanController::class, 'cetak']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['middleware'=>'role:admin'], function(){

        Route::resource('/user', UserController::class);
    });

    Route::group(['middleware'=>'role:karyawan'], function(){

        Route::resource('/kandang', KandangController::class);
        Route::resource('/ayam', AyamController::class);
        Route::resource('/telur', TelurController::class);
        Route::resource('/produk', ProdukController::class);
        Route::resource('/penjualan', PenjualanController::class);
        Route::resource('/pakan', PakanController::class);
    });

});
