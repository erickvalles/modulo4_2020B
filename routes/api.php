<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CiudadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::delete('categorias/{categoria}',[CategoriaController::class,'destroy'])->middleware('desactiva-delete');
Route::apiResource('ciudades',CiudadController::class);
