<?php

namespace App\Http\Controllers;

use App\Models\area;
use App\Models\Estado;
use App\Models\modelo;
use App\Models\personal;
use App\Models\documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    public function index(){
        $area = DB::table('area')->get();
        $modelo = DB::table('modelo')->get();
        $datos = [
            'areas'=>$area,
            'modelos'=>$modelo,
        ];
        return view('usuario.documento',$datos);
    }
    public function buscar_documento(){
        $years = date('Y');
        $documento = documento::join('area','area.id_area','=','fk_area')
        ->join('personal','personal.id_personal','=','fk_personal')
        ->join('modelo','modelo.id_modelo','=','fk_modelo')
        ->where('year','=',$years)
        ->get(['id_documento','nombre_modelo','descripcion','f_registro','year','nombre_area','observacion','nro_adjunto']);
        
        $datos = [
            'documentos'=>$documento
        ];
     
        return view('usuario.enviar',$datos);
    }
    public function guardar_documento(Request $request){
        

        $personal = $request->session()->get("personal");

        if($personal==null){
            return view('login');
        }else{

        //$documento = DB::table('documento')->count();
        //$cantidad = $documento==0 ? 1 : 3;

            if($request->hasFile("subir")){
                $doc = $request->file('subir')->store('public/archivo');
                $url = Storage::url($doc);

            $table_documento = new documento();
            //$table_documento->codigo = $request->codigo;
            $table_documento->fk_modelo = $request->modelo;
            $table_documento->nro_documento = $request->numero;
            $table_documento->descripcion = $request->descripcion;
            $table_documento->f_registro = $request->fecha;
            $table_documento->ruta = $url;
            $table_documento->year = date('Y');
            $table_documento->fk_personal = $personal;
            $table_documento->fk_area = $request->dirigir;
            $table_documento->observacion = $request->observacion;
            $table_documento->nro_adjunto = $request->adjunto;
            $table_documento->fk_estado = 4;

            $table_documento->save();
            
            return redirect()->route('configuracion_ver_documento');
            }
        }
    }
}
