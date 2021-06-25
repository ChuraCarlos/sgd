<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dato;
use App\Models\cargo;
use App\Models\area;
use App\Models\personal;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
// use App\Http\Requests\RegisterUsersRequest;
// use App\Http\Requests\ValidatedAuthUserRequest;

class UsuarioController extends Controller
{
    public function index(){
        // $cargo = DB::table('cargo')->get();
        // $area = DB::table('area')->get();

        // $datos = [
        //     'cargo'=>$cargo,
        //     'area'=>$area,
        // ];

        return view('login');
    }
    public function intro(){
        return view('usuario.bienvenido');
    }
    public function show_registro(){
        $cargo = DB::table('cargo')->get();
        $area = DB::table('area')->get();
        $tipo = DB::table('tipo_documento')->get();

        $datos = [
            'cargos'=>$cargo,
            'areas'=>$area,
            'tipos'=>$tipo,
        ];

        return view('usuario.usuario',$datos);
    }
    public function guardar_registro(Request $request){
        $usuario = new User();
        $usuario->login=$request->login;
        $usuario->clave=$request->clave;
        $usuario->tipo_usuario=$request->usuario;
        $usuario->save();

        $fk_usuario = $usuario->id_usuario; 

        $dato = new Dato();
        $dato->nombre = $request->nombre;
        $dato->paterno = $request->paterno;
        $dato->materno = $request->materno;
        $dato->documento = $request->documento;       
        $dato->celular = $request->celular;
        $dato->direccion = $request->direccion;
        $dato->mail = $request->mail;
        $dato->fk_tipo_documento = $request->tipo;
        $dato->save();
        $fk_dato = $dato->id_dato;    

        $personal = new personal();
        $personal->fk_dato=$fk_dato;
        $personal->fk_usuario=$fk_usuario;
        $personal->fk_cargo=$request->cargo;
        $personal->fk_area=$request->area;
        $personal->save();

        return redirect()->route('usuario.formulario');
        
    }

    public function login(Request $request){

        //dd(User::first()->toArray());

        //$ver=$request->only('login','clave');
        $ver = personal::join('usuario','usuario.id_usuario','=','personal.fk_usuario')->join('dato','dato.id_dato','=','personal.fk_dato')->where('usuario.login','=',$request->login)->first();
        //$ver = User::where('login',$request->login)->first();
    
        if($ver->clave==$request->clave){

             //return($ver->fk_usuario);
             $id_personal = $request->session()->put("personal",$ver->id_personal);
             $nombre = $request->session()->put("nombre",$ver->nombre);
             $paterno = $request->session()->put("paterno",$ver->paterno);
             $materno = $request->session()->put("materno",$ver->materno);
             $cargo = $request->session()->put("cargo",$ver->fk_cargo);
             $area = $request->session()->put("area",$ver->fk_area);
             $tipo = $request->session()->put("tipo",$ver->tipo_usuario);

             $box = [
                'nombre'=>$nombre,
                'paterno'=>$paterno,
                'materno'=>$materno,
             ];

             return view('usuario.bienvenido',$box);
        }else{
            return view('login');
        }

        
    }
}
