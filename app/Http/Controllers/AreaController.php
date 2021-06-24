<?php

namespace App\Http\Controllers;

use App\Models\area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(){
        return view('configurar.area');
    }
    public function guardar_area(Request $request){
    
        $table_area = new area();
        $table_area->nombre_area = $request->area;
        $table_area->save();

        return redirect()->route('configuracion_ver_area');
    }
}
