<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');

    Route::get('/productos', [ProductoController::class,'verProductos'])->name('verProductos');

    Route::get('/productos/guardar', [ProductoController::class,'guardarProducto'])->name('guardarProducto');

    Route::post('/productos/almacenar',[ProductoControllerController::class, 'almacenarProducto'])->name('almacenarProducto');
