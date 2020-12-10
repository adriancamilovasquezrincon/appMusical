<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profesores;
class profesoresController extends Controller
{
    public function index()
    {
        $profesores = profesores::orderBy('nombres','desc')
        ->where('sexo','=','femenino')
        ->get();
        return [
            'profesor'=> $profesores
        ];
    }

    public function store(Request $request)
    {
       $profesores = new profesores();
       $profesores->nombres= $request->nombres;
       $profesores->apellidos= $request->apellidos;
       $profesores->direccion= $request->direccion;
       $profesores->telefono= $request->telefono;
       $profesores->sexo= $request->sexo;
       $profesores->edad= $request->edad;
       $profesores->email= $request->email;

       $profesores->save();
    }
    public function update(Request $request)
    {
        $profesores = profesores::findOrFail($request->id_profesor);
        $profesores->nombres= $request->nombres;
        $profesores->apellidos= $request->apellidos;
        $profesores->direccion= $request->direccion;
        $profesores->telefono= $request->telefono;
        $profesores->sexo= $request->sexo;
        $profesores->edad= $request->edad;
        $profesores->email= $request->email;
 
        $profesores->save();
    }

    public function destroy(Request $request)
    {
        $profesores = profesores::findOrFail($request->id_profesor);
        
        $profesores->delete();
    }
}
