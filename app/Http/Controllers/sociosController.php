<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\socios;
class sociosController extends Controller
{
    public function index()
    {
        $socios = socios::all();
        return [
            'socios'=> $socios
        ];
    }

    public function store(Request $request)
    {
       $socios = new socios();
       $socios->nombres= $request->nombres;
       $socios->apellidos= $request->apellidos;
       $socios->direccion= $request->direccion;
       $socios->telefono= $request->telefono;
       $socios->sexo= $request->sexo;
       $socios->edad= $request->edad;
       $socios->email= $request->email;

       $socios->save();
    }


    public function update(Request $request)
    {
        $socios = socios::findOrFail($request->id_socio);
        $socios->nombres= $request->nombres;
        $socios->apellidos= $request->apellidos;
        $socios->direccion= $request->direccion;
        $socios->telefono= $request->telefono;
        $socios->sexo= $request->sexo;
        $socios->edad= $request->edad;
        $socios->email= $request->email;
 
        $socios->save();
    }


    public function destroy(Request $request)
    {
        $socios = socios::findOrFail($request->id_socio);
        $socios->delete();
    }
}
