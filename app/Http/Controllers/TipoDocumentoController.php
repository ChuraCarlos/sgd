<?php

namespace App\Http\Controllers;

use App\Models\TipoDocumento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoDocumentoController extends Controller
{
    public function index(){
        $tipo = DB::table('tipo_documento')->get();

        $datos = [
            'tipos'=>$tipo,
        ];
        return view('configurar.tipo_documento',$datos);
    }
    public function guardar_tipo(Request $request){
    
        $table_tipo = new TipoDocumento();
        $table_tipo->nombre_tipo = $request->tipo;
        $table_tipo->save();

        return redirect()->route('configuracion_ver_tipo');
    }
    public function editar(Request $request){
        $id = $request->iden;
        $tipo = TipoDocumento::findOrFail($id);
        $tipo->nombre_tipo = $request->nombre;
        $tipo->save();
        
        return redirect()->route('configuracion_ver_tipo');
    }
    public function eliminar(Request $request){
        $id = $request->identi;
        $remover = TipoDocumento::find($id);
        $remover->delete();
    
        return redirect()->route('configuracion_ver_tipo');
    }
}