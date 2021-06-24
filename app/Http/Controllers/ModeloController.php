<?php

namespace App\Http\Controllers;

use App\Models\modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function index(){
        return view('configurar.modelo');
    }
    public function guardar_modelo(Request $request){
    
        $table_modelo = new modelo();
        $table_modelo->nombre_modelo = $request->modelo;
        $table_modelo->save();

        return redirect()->route('configuracion_ver_modelo');
    }
}
