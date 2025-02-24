u<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //

    public function almacenarProducto(Request $request)
    {
        $producto = new Producto();
        $producto->codigoProducto = $request->codigoProducto;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->save();
        return to_route('verProductos');
    }

    public function verProductos()
    {
        $productos = Producto::all();
        return view('verProductos',compact('productos'));
    }

    public function guardarProducto()
    {
        return view('guadarProductos');
    }
}
