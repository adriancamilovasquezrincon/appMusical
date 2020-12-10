<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aprendices;
class aprendicesController extends Controller
{
    public function index()
    {
        $aprendices = aprendices::all();
        return [
            'aprendices'=> $aprendices
        ];
    }

    public function store(Request $request)
    
    {
        $aprendices = new aprendices();
        $aprendices->nombres= $request->nombres;
        $aprendices->apellidos= $request->apellidos;
        $aprendices->direccion= $request->direccion;
        $aprendices->telefono= $request->telefono;
        $aprendices->sexo= $request->sexo;
        $aprendices->edad= $request->edad;
        $aprendices->email= $request->email;

        $aprendices->save();
    }

    public function update(Request $request)
    {
        $aprendices = aprendices::findOrFail($request->id_aprendiz);
        $aprendices->nombres= $request->nombres;
        $aprendices->apellidos= $request->apellidos;
        $aprendices->direccion= $request->direccion;
        $aprendices->telefono= $request->telefono;
        $aprendices->sexo= $request->sexo;
        $aprendices->edad= $request->edad;
        $aprendices->email= $request->email;

        $aprendices->save();
    }

    public function destroy(Request $request)
    {
        $aprendices = aprendices::findOrFail($request->id_aprendiz);
        
        $aprendices->delete();
    }
}
