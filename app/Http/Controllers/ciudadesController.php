<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ciudades;
use App\Models\departamentos;

class ciudadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ciudades = DB::table('departamentos')
        ->join('ciudades','ciudades.iddepartamento','=','departamentos.iddepartamento')
        ->select(
            'ciudades.idciudad',
            'departamentos.iddepartamento',
            'departamentos.nombre as dep',
            'ciudades.nombre'
        )
        ->orderby('departamentos.nombre','ASC')
        ->orderby('ciudades.nombre','ASC')
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
