<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function producto(){
        $productos = Producto::all();
        return view('producto', compact('productos'));
    }
    public function agregarProducto(){
        return view('crearProducto');
    }
    public function store(Request $request){
    $producto = new Producto();
    $producto->descripcion = $request->input('descripcion');
    $producto->precio = $request->input('precio');
    $producto->stock = $request->input('stock');
    $producto->pagaisv = $request->input('pagaisv') === 'si' ? 1 : 0;

    $producto->save();

    return redirect()->route('producto.index');
}

}
