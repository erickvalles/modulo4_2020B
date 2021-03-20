<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ProductoController;
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
    echo "<a href='productos'>Ir a productos</a>";
});

Route::resource('productos',ProductoController::class)->middleware('auth');
Route::post('distribuidores/{producto}',[ProductoController::class,'storeDistribuidores'])->name('guardar_distribuidores');
Route::resource('categorias',CategoriaController::class)->except(['destroy']);
Route::resource('ciudades',CiudadController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
