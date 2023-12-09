<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function empleado(){
        $empleados = Empleado::all();
        return view('empleado', compact('empleados'));
    }
    public function agregarempleado(){
        return view('crearempleado');
    }
    public function store(Request $request){
    $empleado = new empleado();
    $empleado->nombre = $request->input('nombre');
    $empleado->apellido = $request->input('apellido');
    $empleado->fechaingreso = $request->input('fechaingreso');
    $empleado->salario = $request->input('salario');

    $empleado->save();

    return redirect()->route('empleado.index');
}
}
