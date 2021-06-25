<?php

namespace App\Http\Controllers;

use App\Models\cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CargoController extends Controller
{
    public function index(){
        $cargo = DB::table('cargo')->get();

        $datos = [
            'cargos'=>$cargo,
        ];
        return view('configurar.cargo',$datos);
    }
    public function guardar_cargo(Request $request){
    
        $table_cargo = new cargo();
        $table_cargo->nombre_cargo = $request->cargo;
        $table_cargo->save();

        return redirect()->route('configuracion_ver_cargo');
    }
    public function buscar(Request $request){
        $id = $request->iden;
        $cargo = cargo::findOrFail($id);
        $cargo->nombre_cargo = $request->nombre;
        $cargo->save();
        
        return redirect()->route('configuracion_ver_cargo');
    }
    public function eliminar(Request $request){
        $id = $request->identi;
        $remover = cargo::find($id);
        $remover->delete();
    
        return redirect()->route('configuracion_ver_cargo');
    }
}
