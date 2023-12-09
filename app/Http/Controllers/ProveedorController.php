<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedore;

class ProveedorController extends Controller
{
    public function proveedor(){
        $proveedores = Proveedore::all();
        return view('proveedor', compact('proveedores'));
    }
    public function agregarproveedor(){
        return view('crearproveedor');
    }
    public function store(Request $request){
    $proveedor = new Proveedore();
    $proveedor->nombre = $request->input('nombre');
    $proveedor->fecharegistro = $request->input('fecharegistro');
    $proveedor->telefono = $request->input('telefono');
    $proveedor->correo = $request->input('correo');

    $proveedor->save();

    return redirect()->route('proveedor.index');
}
}
