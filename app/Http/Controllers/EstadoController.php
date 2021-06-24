<?php

namespace App\Http\Controllers;

use App\Models\estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadoController extends Controller
{
    public function index(){
        
        $estado = DB::table('estado')->get();

        $datos = [
            'estados'=>$estado,
        ];
        return view('configurar.estado',$datos);
    }
    public function guardar_estado(Request $request){
    
        $table_estado = new estado();
        $table_estado->nombre_estado = $request->estado;
        $table_estado->save();

        return redirect()->route('configuracion_ver_estado');
    }
}
