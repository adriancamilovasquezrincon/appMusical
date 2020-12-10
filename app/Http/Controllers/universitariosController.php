<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\universitarios;
class universitariosController extends Controller
{
    public function index()
    {
        $universitarios = universitarios::orderBy('nombres','asc')
        ->where('edad','>=','22')
        ->get();
        return [
            'universidad'=> $universitarios
        ];
    }

    public function store(Request $request)
    {
       $universitarios = new universitarios();
       $universitarios->nombres= $request->nombres;
       $universitarios->apellidos= $request->apellidos;
       $universitarios->direccion= $request->direccion;
       $universitarios->telefono= $request->telefono;
       $universitarios->sexo= $request->sexo;
       $universitarios->edad= $request->edad;
       $universitarios->email= $request->email;

       $universitarios->save();
    }
    public function update(Request $request)
    {
        $universitarios = universitarios::findOrFail($request->id_universitario);
        $universitarios->nombres= $request->nombres;
        $universitarios->apellidos= $request->apellidos;
        $universitarios->direccion= $request->direccion;
        $universitarios->telefono= $request->telefono;
        $universitarios->sexo= $request->sexo;
        $universitarios->edad= $request->edad;
        $universitarios->email= $request->email;
 
        $universitarios->save();
    }

    public function destroy(Request $request)
    {
        $universitarios = universitarios::findOrFail($request->id_universitario);
        
        $universitarios->delete();
    }
}
