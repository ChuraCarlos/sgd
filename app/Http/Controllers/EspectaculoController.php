<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class EspectaculoController extends Controller
{
    public function index(){
        return view('usuario.espectaculo');
    }
    public function imprimir(Request $request){
        $data=[
            'provincia' => $request->input('provincia'),
            'region' => $request->input('region'),
            'nombre' => $request->input('nombre'),
            'paterno' => $request->input('paterno'),
            'materno' => $request->input('materno'),
            'telefono' => $request->input('telefono'),
            'razon' => $request->input('razon'),
            'correo' => $request->input('correo'),
            'ter_fecha' => $request->input('ter_fecha'),
            'ter_inicio' => $request->input('ter_inicio'),
            'ter_termino' => $request->input('ter_termino'),
            'ter_lugar' => $request->input('ter_lugar'),
            'ter_ubicacion' => $request->input('ter_ubicacion'),
            'ter_asistentes' => $request->input('ter_asistentes'),
            'ter_adicional' => $request->input('ter_adicional'),
            'fecha' => $request->input('fecha'),
            'lugar' => $request->input('lugar'),
        ];
        $pdf = PDF::loadView('dompdf.espectaculo', $data);
        return $pdf->download('espectaculo.pdf');
    }
}
