<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cantantes;
class cantantesController extends Controller
{
    public function index()
    {
        $cantantes = cantantes::all();
        return [
            'cantantes'=> $cantantes
        ];
    }
    public function store(Request $request)
    
    {
        $cantantes = new cantantes();
        $cantantes->nombres= $request->nombres;
        $cantantes->apellidos= $request->apellidos;
        $cantantes->direccion= $request->direccion;
        $cantantes->telefono= $request->telefono;
        $cantantes->sexo= $request->sexo;
        $cantantes->edad= $request->edad;
        $cantantes->email= $request->email;

        $cantantes->save();
    }

    public function update(Request $request)
    {
        $cantantes = cantantes::findOrFail($request->id_cantante);
        $cantantes->nombres= $request->nombres;
        $cantantes->apellidos= $request->apellidos;
        $cantantes->direccion= $request->direccion;
        $cantantes->telefono= $request->telefono;
        $cantantes->sexo= $request->sexo;
        $cantantes->edad= $request->edad;
        $cantantes->email= $request->email;
        
        $cantantes->save();
    }

    public function destroy(Request $request)
    {
        $cantantes = cantantes::findOrFail($request->id_cantante);
        
        $cantantes->delete();
    }
}
