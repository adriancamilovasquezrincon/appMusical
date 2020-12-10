<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\maestros;
class maestrosController extends Controller
{
    public function index()
    {
        $maestros = maestros::orderBy('nombres','asc')
        ->where('edad','<=','30')
        ->get();
        return [
            'maestro'=> $maestros
        ];
    }

    public function store(Request $request)
    {
       $maestros = new maestros();
       $maestros->nombres= $request->nombres;
       $maestros->apellidos= $request->apellidos;
       $maestros->direccion= $request->direccion;
       $maestros->telefono= $request->telefono;
       $maestros->sexo= $request->sexo;
       $maestros->edad= $request->edad;
       $maestros->email= $request->email;

       $maestros->save();
    }
    public function update(Request $request)
    {
        $maestros = maestros::findOrFail($request->id_maestro);
        $maestros->nombres= $request->nombres;
        $maestros->apellidos= $request->apellidos;
        $maestros->direccion= $request->direccion;
        $maestros->telefono= $request->telefono;
        $maestros->sexo= $request->sexo;
        $maestros->edad= $request->edad;
        $maestros->email= $request->email;
 
        $maestros->save();
    }


    public function destroy(Request $request)
    {
        $maestros = maestros::findOrFail($request->id_maestro);
        
        $maestros->delete();
    }
}
