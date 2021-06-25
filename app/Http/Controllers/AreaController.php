<?php

namespace App\Http\Controllers;

use App\Models\area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller
{
    public function index(){
        $area = DB::table('area')->get();

        $datos = [
            'areas'=>$area,
        ];
        return view('configurar.area',$datos);
    }
    public function guardar_area(Request $request){
    
        $table_area = new area();
        $table_area->nombre_area = $request->area;
        $table_area->save();

        return redirect()->route('configuracion_ver_area');
    }
    public function buscar(Request $request){
        $id = $request->iden;
        $area = area::findOrFail($id);
        $area->nombre_area = $request->nombre;
        $area->save();
        
        return redirect()->route('configuracion_ver_area');
    }
    public function eliminar(Request $request){
        $id = $request->identi;
        $area = area::find($id);
        $area->delete();
    
        return redirect()->route('configuracion_ver_area');
    }
}
