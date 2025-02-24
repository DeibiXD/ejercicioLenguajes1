<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/productos', [ProductoController::class,'verProductos'])->name('verProductos');

    Route::get('/productos/guardar', [ProductoController::class,'guardarProducto'])->name('guardarProductos');

    Route::post('/productos/almacenar', [ProductoController::class, 'almacenarProducto'])->name('almacenarProducto');

    Route::get('/ventas',[VentaController::class,'verVentas'])->name('verVentas');