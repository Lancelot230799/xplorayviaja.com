<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paquetes;

use function Laravel\Prompts\alert;

class paquetesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $paquetes = paquetes::orderBy('nombre', 'ASC')->get();
        return view('adm/crear');
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

        paquetes::create([
            'nombre' => request('nombre'),
            'tipotiquet' => request('tipotiquet'),
            'traslados' => request('traslados'),
            'diasdesalojamiento' => request('diasdesalojamiento'),
            'alimentacion' => request('alimentacion'),
            'capacidadequipaje' => request('capacidadequipaje'),
            'seguromedico' => request('seguromedico'),
            'tour' => request('tour'),
            'fotopaquete' => request('fotopaquete'),
            'valor' => request('valor'),
        ]);
        return view('home');
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
