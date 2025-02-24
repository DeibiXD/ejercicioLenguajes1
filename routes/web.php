<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/productos', [ProductoController::class,'verProductos'])->name('verProductos');

    Route::get('/productos/guardar', [ProductoController::class,'guardarProducto'])->name('guardarProductos');

    Route::post('/productos/almacenar', [ProductoController::class, 'almacenarProducto'])->name('almacenarProducto');
