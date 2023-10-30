<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/products', App\Http\Controllers\ProductController::class);

Route::resource('/nosotros', App\Http\Controllers\NosotrosController::class);
Route::resource('/venta', App\Http\Controllers\VentaController::class);
Route::get('/tienda', function () {
    return view('tienda.index');
})->name('tienda');
Route::resource('/usp', App\Http\Controllers\UspController::class);
