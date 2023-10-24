<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\reservas;
use App\Models\paquetes;
use App\Models\mediospagos;
use App\Models\gastosadicionales;
use App\Models\clientes;
use App\Models\empleados;
use App\Models\departamentos;
use App\Models\ciudades;

class reservasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reservas = DB::table('reservas')
        ->join('empleados', 'reservas.id_empleado', '=', 'empleados.id_empleado')
        ->join('clientes', 'reservas.id_cliente', '=', 'clientes.id_cliente')
        ->join('gastosadicionales as gal', 'reservas.id_reserva', '=', 'gal.id_reserva')
        ->join('paquetes', 'reservas.id_paquete', '=', 'paquetes.id_paquete')
        ->join('mediospagos as pag', 'reservas.id_mediopago', '=', 'pag.id_mediopago')
        ->join('departamentos as depa', 'reservas.id_departamento', '=', 'depa.id_departamento')
        ->join('ciudades', 'reservas.id_ciudad', '=', 'ciudades.id_ciudad')
        ->select(
            'reservas.id_reserva',
            'empleados.id_empleado',
            'clientes.id_cliente',
            'gal.id_gastoadicional',
            'paquetes.id_paquete',
            'pag.id_mediopago',
            'depa.id_departamento',
            'ciudades.id_ciudad'
        )
        ->orderBy('reservas.idreserva', 'ASC')
        ->orderBy('empleados.idempleado', 'ASC')
        ->orderBy('clientes.idcliente', 'ASC')
        ->orderBy('gal.idgastoadicional', 'ASC')
        ->orderBy('paquetes.idpaquete', 'ASC')
        ->orderBy('pag.idpaquete', 'ASC')
        ->orderBy('depa.iddepartamento', 'ASC')
        ->orderBy('ciudades.idciudad', 'ASC')
        ->get();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
