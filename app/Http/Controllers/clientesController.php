<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\clientes;
use App\Models\empleados;
use App\Models\User;
use App\Models\paquetes;

class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clientes = DB::table('users')
        ->join('clientes','clientes.idcliente','=','users.id')
        ->select(
            'clientes.idcliente',
            'users.id',
            'users.name as user',
            'clientes.nombre'
        )
        ->orderby('users.name','ASC')
        ->orderby('clientes.nombre','ASC')
        ->get();
    }
    public function indexpaquetes()
    {
        $paquetes = paquetes::all();
        return view('catalogo', compact('paquetes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $User = User::orderBy('name','ASC')->get();
        return view('actualizar/actualizarclientes',['User'=>$User]);
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
        $cantidadclientes = clientes::where('idusers','=',$id)->count();
        if($cantidadclientes>0){
            $clientes = clientes::where('idusers','=',$id)->get();
            return view('actualizar/actualizarclientes',['clientes'=>$clientes])->with('cli', $cantidadclientes);
        }
        else{
            return view('actualizar/actualizarclientes')->with('cli', $cantidadclientes);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cantidadclientes = Clientes::where('idusers','=',$id)->count();
        if($cantidadclientes > 0){
            $clientes = Clientes::where('idusers','=',$id);
            $clientes->update([
                'idusers'=>request('codigo'),
                'identificacion'=>request('identificacion'),
                'nombre'=>request('nombre'),
                'apellido'=>request('apellido'),
                'telefono'=>request('telefono'),
                'correoelectronico'=>request('correoelectronico'),
            ]);
        }
        else{
            Clientes::create([
                'idusers'=>request('codigo'),
                'identificacion'=>request('identificacion'),
                'nombre'=>request('nombre'),
                'apellido'=>request('apellido'),
                'telefono'=>request('telefono'),
                'correoelectronico'=>request('correoelectronico'),
            ]);
        }
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
