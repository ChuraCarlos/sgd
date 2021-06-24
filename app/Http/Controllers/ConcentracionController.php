<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ConcentracionController extends Controller
{
    public function index(){
        return view('usuario.concentracion');
    }
    public function imprimir(Request $request){
        $data=[
            'provincia' => $request->input('provincia'),
            'region' => $request->input('region'),
            'nombre' => $request->input('nombre'),
            'paterno' => $request->input('paterno'),
            'materno' => $request->input('materno'),
            'telefono' => $request->input('telefono'),
            'documento' => $request->input('documento'),
            'domicilio' => $request->input('domicilio'),
            'razon' => $request->input('razon'),
            'correo' => $request->input('correo'),
            'ter_fecha' => $request->input('ter_fecha'),
            'ter_inicio' => $request->input('ter_inicio'),
            'ter_termino' => $request->input('ter_termino'),
            'ter_lugar' => $request->input('ter_lugar'),
            'ter_motivo' => $request->input('ter_motivo'),
            'de_ruta' => $request->input('de_ruta'),
            'de_asistentes' => $request->input('de_asistentes'),
            'de_motivo' => $request->input('de_motivo'),
            'de_ruta' => $request->input('de_ruta'),
            'de_asistentes' => $request->input('de_asistentes'),
            'de_motivo' => $request->input('de_motivo'),
            'fecha' => $request->input('fecha'),
            'lugar' => $request->input('lugar')
        ];
        $pdf = PDF::loadView('dompdf.concentracion', $data);
        return $pdf->download('concentracion.pdf');
    }
}
