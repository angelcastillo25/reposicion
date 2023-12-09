<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProveedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/producto', [ProductoController::class, 'producto'])->name('producto.index');

Route::get('/producto/agregar', [ProductoController::class, 'agregarProducto'])->name('producto.agregar');

Route::post('/producto/agregar/nuevo', [ProductoController::class, 'store'])->name('producto.store');

//empleado

Route::get('/empleado', [EmpleadoController::class, 'empleado'])->name('empleado.index');

Route::get('/empleado/agregar', [EmpleadoController::class, 'agregarempleado'])->name('empleado.agregar');

Route::post('/empleado/agregar/nuevo', [EmpleadoController::class, 'store'])->name('empleado.store');

//proveedores

Route::get('/proveedor', [ProveedorController::class, 'proveedor'])->name('proveedor.index');

Route::get('/proveedor/agregar', [ProveedorController::class, 'agregarproveedor'])->name('proveedor.agregar');

Route::post('/proveedor/agregar/nuevo', [ProveedorController::class, 'store'])->name('proveedor.store');


