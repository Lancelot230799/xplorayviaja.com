<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\paquetes;

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
    /* Exportar el modelo paquetes */
    /* Realizar consulta */

    return view('welcome');
});

Auth::routes();
/* Pruebas rutas */
Route::get('xplorayviaja/gastosadicionales', [App\Http\Controllers\clientesController::class, 'index'])->name('clientes');
/* Rutas predefinidas */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* Rutas */
Route::get('xplorayviaja/metodospago', [App\Http\Controllers\mediospagosController::class, 'index'])->name('mediosp.index');
Route::get('xplorayviaja/crearpaquete', [App\Http\Controllers\paquetesController::class, 'index'])->name('crear.index');
/* RUTAS ACTUALIZAR Y AÑADIR CLIENTES */
Route::get('xplorayviaja/actualizarcliente/{id}', [App\Http\Controllers\clientesController::class, 'edit'])->name('clientes.edit');
Route::get('xplorayviaja/updatecliente/{id}', [App\Http\Controllers\clientesController::class, 'update'])->name('clientes.update');
/* RUTAS ACTUALIZAR Y AÑADIR EMPLEADOS */
Route::get('xplorayviaja/actualizarempleado/{id}', [App\Http\Controllers\EmpleadosController::class, 'edit'])->name('empleado.edit');
Route::get('xplorayviaja/updateempleado/{id}', [App\Http\Controllers\EmpleadosController::class, 'update'])->name('empleado.update');
/* STORE PAQUETES */
Route::get('xplorayviaja/publicarpaquete', [App\Http\Controllers\paquetesController::class, 'store'])->name('paquete.crear');