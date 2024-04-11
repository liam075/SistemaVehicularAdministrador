<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ModelosController;
use App\Http\Controllers\CiudadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('marcas')->group(function () {
    Route::get('', [MarcasController::class,'index']);
    // Route::get('/{i}', [MarcasController::class,'show']);
    // Route::get('/search/{cedula}',[MarcasController::class,'BuscarNombre']);
    // Route::post('',[MarcasController::class,'store']);
    // Route::put('/{i}',[MarcasController::class,'update']);
    // Route::delete('/{i}',[MarcasController::class,'destroy']);
});

Route::prefix('modelos')->group(function () {
    Route::get('', [ModelosController::class,'index']);
    // Route::get('/{i}', [MarcasController::class,'show']);
    // Route::get('/search/{cedula}',[MarcasController::class,'BuscarNombre']);
    // Route::post('',[MarcasController::class,'store']);
    // Route::put('/{i}',[MarcasController::class,'update']);
    // Route::delete('/{i}',[MarcasController::class,'destroy']);
});

Route::prefix('ciudad')->group(function () {

    Route::get('', [CiudadController::class,'index']);
    // Route::get('/{i}', [MarcasController::class,'show']);
    // Route::get('/search/{cedula}',[MarcasController::class,'BuscarNombre']);
    // Route::post('',[MarcasController::class,'store']);
    // Route::put('/{i}',[MarcasController::class,'update']);
    // Route::delete('/{i}',[MarcasController::class,'destroy']);
});

Route::prefix('ciudad')->group(function () {

    Route::get('', [CiudadController::class,'index']);
    // Route::get('/{i}', [MarcasController::class,'show']);
    // Route::get('/search/{cedula}',[MarcasController::class,'BuscarNombre']);
    // Route::post('',[MarcasController::class,'store']);
    // Route::put('/{i}',[MarcasController::class,'update']);
    // Route::delete('/{i}',[MarcasController::class,'destroy']);
});

Route::prefix('ciudad')->group(function () {

    Route::get('', [CiudadController::class,'index']);
    // Route::get('/{i}', [MarcasController::class,'show']);
    // Route::get('/search/{cedula}',[MarcasController::class,'BuscarNombre']);
    // Route::post('',[MarcasController::class,'store']);
    // Route::put('/{i}',[MarcasController::class,'update']);
    // Route::delete('/{i}',[MarcasController::class,'destroy']);
});

Route::prefix('ciudad')->group(function () {

    Route::get('', [CiudadController::class,'index']);
    // Route::get('/{i}', [MarcasController::class,'show']);
    // Route::get('/search/{cedula}',[MarcasController::class,'BuscarNombre']);
    // Route::post('',[MarcasController::class,'store']);
    // Route::put('/{i}',[MarcasController::class,'update']);
    // Route::delete('/{i}',[MarcasController::class,'destroy']);
});

Route::prefix('ciudad')->group(function () {

    Route::get('', [CiudadController::class,'index']);
    // Route::get('/{i}', [MarcasController::class,'show']);
    // Route::get('/search/{cedula}',[MarcasController::class,'BuscarNombre']);
    // Route::post('',[MarcasController::class,'store']);
    // Route::put('/{i}',[MarcasController::class,'update']);
    // Route::delete('/{i}',[MarcasController::class,'destroy']);
});
