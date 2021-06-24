<?php

namespace App\Http\Controllers;

use App\Models\cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(){
        return view('configurar.cargo');
    }
    public function guardar_cargo(Request $request){
    
        $table_cargo = new cargo();
        $table_cargo->nombre_cargo = $request->cargo;
        $table_cargo->save();

        return redirect()->route('configuracion_ver_cargo');
    }
}
