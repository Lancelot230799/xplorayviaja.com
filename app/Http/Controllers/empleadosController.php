<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\empleados;
use App\Models\User;

class empleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empleados = DB::table('users')
        ->join('empleados','empleados.idempleado','=','users.id')
        ->select(
            'empleados.idempleado',
            'users.id',
            'users.name as user2',
            'empleados.nombre'
        )
        ->orderby('users.id','ASC')
        ->orderby('empleados.nombre','ASC')
        ->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $User = User::orderBy('name','ASC')->get();
        return view('perfiles/crearclientes',['User'=>$User]);
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
        $cantidadempleados = Empleados::where('idusers','=',$id)->count();
        if($cantidadempleados>0){
            $empleados = Empleados::where('idusers','=',$id)->get();
            return view('actualizar/actualizarempleado',['clientes'=>$empleados])->with('emp', $cantidadempleados);
        }
        else{
            return view('actualizar/actualizarempleado')->with('emp', $cantidadempleados);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cantidadempleados = Empleados::where('idusers','=',$id)->count();
        if($cantidadempleados > 0){
            $empleados = Empleados::where('idusers','=',$id);
            $empleados->update([
                'idusers'=>request('codigo'),
                'identificacion'=>request('identificacion'),
                'nombre'=>request('nombre'),
                'apellido'=>request('apellido'),
                'telefono'=>request('telefono'),
                'correoelectronico'=>request('correoelectronico'),
                'cargo'=>request('cargo'),
                'fechaingreso'=>request('fechaingreso'),
            ]);
        }
        else{
            Empleados::create([
                'idusers'=>request('codigo'),
                'identificacion'=>request('identificacion'),
                'nombre'=>request('nombre'),
                'apellido'=>request('apellido'),
                'telefono'=>request('telefono'),
                'correoelectronico'=>request('correoelectronico'),
                'cargo'=>request('cargo'),
                'fechaingreso'=>request('fechaingreso'),
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
