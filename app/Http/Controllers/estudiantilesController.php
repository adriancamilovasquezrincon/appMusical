<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiantiles;
class estudiantilesController extends Controller
{
    public function index()
    {
        $estudiantiles= estudiantiles::join('maestros', 'estudiantiles.esi_maestro','=','maestros.id_maestro')
        ->select('estudiantiles.nombres', 'estudiantiles.apellidos', 'estudiantiles.sexo', 'estudiantiles.direccion','maestros.nombres as masco','maestros.apellidos as masxi','maestros.edad as masde')
        ->orderBy('maestros.nombres', 'asc', 'sexo', '=', 'femenino')
        ->get();
        return[
            'estudiante'=>$estudiantiles
        ];
    }
    public function store(Request $request)
    
    {
        $estudiantiles = new estudiantiles();
        $estudiantiles->nombres= $request->nombres;
        $estudiantiles->apellidos= $request->apellidos;
        $estudiantiles->direccion= $request->direccion;
        $estudiantiles->telefono= $request->telefono;
        $estudiantiles->sexo= $request->sexo;
        $estudiantiles->edad= $request->edad;
        $estudiantiles->email= $request->email;
        $estudiantiles->esi_maestro= $request->esi_maestro;

        $estudiantiles->save();
    }

    public function update(Request $request)
    {
        $estudiantiles = estudiantiles::findOrFail($request->id_estudiantil);
        $estudiantiles->nombres= $request->nombres;
        $estudiantiles->apellidos= $request->apellidos;
        $estudiantiles->direccion= $request->direccion;
        $estudiantiles->telefono= $request->telefono;
        $estudiantiles->sexo= $request->sexo;
        $estudiantiles->edad= $request->edad;
        $estudiantiles->email= $request->email;
        $estudiantiles->esi_maestro= $request->esi_maestro;
        
        $estudiantiles->save();
    }

    public function destroy(Request $request)
    {
        $estudiantiles = estudiantiles::findOrFail($request->id_estudiantil);
        
        $estudiantiles->delete();
    }
}
