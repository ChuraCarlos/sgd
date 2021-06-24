<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PersonalController extends Controller
{
    public function index(){
        return view("usuario.personal");
    }
    public function imprimir(Request $request){
        $data = [
            'director' => $request->input('director'),
            'provincia' => $request->input('provincia'),
            'region' => $request->input('region'),
            'nombre' => $request->input('nombre'),
            'paterno' => $request->input('paterno'),
            'materno' => $request->input('materno'),
            'nacionalidad' => $request->input('nacionalidad'),
            'documento' => $request->input('documento'),
            'domicilio' => $request->input('domicilio'),
            'edad' => $request->input('edad'),
            'correo' => $request->input('correo'),
            'ocupacion' => $request->input('ocupacion'),
            'centro' => $request->input('centro'),
            'ter_nombre' => $request->input('ter_nombre'),
            'ter_nacionalidad' => $request->input('ter_nacionalidad'),
            'ter_edad' => $request->input('ter_edad'),
            'ter_documento' => $request->input('ter_documento'),
            'ter_ocupacion' => $request->input('ter_ocupacion'),
            'ter_domicilio' => $request->input('ter_domicilio'),
            'ter_afinidad' => $request->input('ter_afinidad'),
            'ter_centro' => $request->input('ter_centro'),
            'ter_correo' => $request->input('ter_correo'),
            'de_nombre' => $request->input('de_nombre'),
            'de_edad' => $request->input('de_edad'),
            'de_domicilio' => $request->input('de_domicilio'),
            'de_referencia' => $request->input('de_referencia'),
            'de_centro' => $request->input('de_centro'),
            'de_motivo' => $request->input('de_motivo'),
            'fecha' => $request->input('fecha'),
            'lugar' => $request->input('lugar'),
        ];

        $pdf = PDF::loadView('dompdf.personal', $data);
        return $pdf->download('imprimir.pdf');


    }    
}
