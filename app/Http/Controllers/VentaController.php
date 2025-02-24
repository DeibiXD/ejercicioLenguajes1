<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use App\Models\Producto;

class VentaController extends Controller
{
    public function verVentas(){
        $ventas = Venta::all();
        return view('verVentas', compact('ventas'));
    }

    public function crearVenta(){
        return view('crearVenta');
    }

    public function calcTotal($subtotal, $isv){
        return $subtotal+$isv;
    }

    public function calcISV($subtotal){
        return $subtotal*0.15;
    }

    public function calcSubtotal($precioProducto, $cantidad){
        return $precioProducto*$cantidad;
    }

    public function almacenarVenta(Request $request){
        $venta = new Venta();
        $venta->codigo = $request->codigo;
        $venta->fechaVenta = $request->fechaVenta;
        $venta->codigoProducto = $request->codigoProducto;
        $venta->cantidad = $request->cantidad;

        // Subtotal, ISV, Total
        $producto = Producto::find($venta->codigoProducto);
        $venta->subtotal = $this->calcSubtotal($producto->precio, $venta->cantidad);
        $venta->ISV = $this->calcISV($venta->subtotal);
        $venta->total = $this->calcTotal($venta->subtotal, $venta->ISV);
        $venta->save();
        return to_route('verVentas');
    }

    

}