<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\clientes;
use App\Models\gastosadicionales;
use App\Models\User;

class gastosadicionalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gastosadicionales = DB::table('clientes')
        ->join('gastosadicionales as ga1', 'ga1.idgastoadicional', '=', 'clientes.idcliente')
        ->join('paquetes', 'paquetes.idpaquete', '=', 'ga1.idgastoadicional')
        ->select(
            'ga1.idgastoadicional',
            'clientes.idcliente',
            'paquetes.idpaquete',
            'clientes.nombre as cliente',
            'paquetes.nombre as paquete',
            'ga1.valorextra'
        )
        ->orderBy('clientes.idcliente', 'ASC')
        ->orderBy('paquetes.nombre', 'ASC')
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
