<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\instrumentales;
class instrumentalesController extends Controller
{
    public function index()
    {
        $instrumentales= instrumentales::all();
        return[
            'instrumento'=>$instrumentales
        ];
    }
    public function store(Request $request)
    
    {
        $instrumentales = new instrumentales();
        $instrumentales->nombres= $request->nombres;
        $instrumentales->apellidos= $request->apellidos;
        $instrumentales->direccion= $request->direccion;
        $instrumentales->telefono= $request->telefono;
        $instrumentales->sexo= $request->sexo;
        $instrumentales->edad= $request->edad;
        $instrumentales->email= $request->email;
        $instrumentales->profesorI= $request->profesorI;
        $instrumentales->estudianteI= $request->estudianteI;

        $instrumentales->save();
    }

    public function update(Request $request)
    {
        $instrumentales = instrumentales::findOrFail($request->id_instrumental);
        $instrumentales->nombres= $request->nombres;
        $instrumentales->apellidos= $request->apellidos;
        $instrumentales->direccion= $request->direccion;
        $instrumentales->telefono= $request->telefono;
        $instrumentales->sexo= $request->sexo;
        $instrumentales->edad= $request->edad;
        $instrumentales->email= $request->email;
        $instrumentales->profesorI= $request->profesorI;
        $instrumentales->estudianteI= $request->estudianteI;

        $instrumentales->save();
    }

    public function destroy(Request $request)
    {
        $instrumentales = instrumentales::findOrFail($request->id_instrumental);
        
        $instrumentales->delete();
    }
}
