<?php

namespace App\Http\Controllers;

use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    public function index(){
        return view('configurar.tipo_documento');
    }
    public function guardar_tipo(Request $request){
    
        $table_tipo = new TipoDocumento();
        $table_tipo->nombre_tipo = $request->tipo;
        $table_tipo->save();

        return redirect()->route('configuracion_ver_tipo');
    }
}