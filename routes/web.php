<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\EspectaculoController;
use App\Http\Controllers\ConcentracionController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\DocumentoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[UsuarioController::class,'index']);
Route::post('/',[UsuarioController::class,'login'])->name("verificar");

Route::get('registro',[UsuarioController::class,'show_registro'])->name("usuario.formulario");
Route::post('registro',[UsuarioController::class,'guardar_registro'])->name("usuario.guardar");

Route::get('personal',[PersonalController::class,'index'])->name('personal.inicio');
Route::post('personal',[PersonalController::class,'imprimir'])->name('personal.imprimir');

Route::get('concentracion',[ConcentracionController::class,'index'])->name('concentracion.inicio');
Route::post('concentracion',[ConcentracionController::class,'imprimir'])->name('concentracion.imprimir');

Route::get('espectaculo',[EspectaculoController::class,'index'])->name('espectaculo.inicio');
Route::post('espectaculo',[EspectaculoController::class,'imprimir'])->name('espectaculo.imprimir');

//Route::get('usuario',[UsuarioController::class,'index'])->name('usuario');
//Route::get('configurar',[PersonalController::class,'index'])->name('documento');

Route::get('area',[AreaController::class,'index'])->name('configuracion_ver_area');
Route::post('area',[AreaController::class,'guardar_area'])->name('configuracion_guardar_area');

Route::post('area/buscar',[AreaController::class,'buscar'])->name('buscar_area');
Route::post('area/eliminar',[AreaController::class,'eliminar'])->name('eliminar_area');

Route::get('cargo',[CargoController::class,'index'])->name('configuracion_ver_cargo');
Route::post('cargo',[CargoController::class,'guardar_cargo'])->name('configuracion_guardar_cargo');

Route::post('cargo/buscar',[CargoController::class,'buscar'])->name('buscar_cargo');
Route::post('cargo/eliminar',[CargoController::class,'eliminar'])->name('eliminar_cargo');

Route::get('tipo',[TipoDocumentoController::class,'index'])->name('configuracion_ver_tipo');
Route::post('tipo',[TipoDocumentoController::class,'guardar_tipo'])->name('configuracion_guardar_tipo');

Route::post('tipo/editar',[TipoDocumentoController::class,'editar'])->name('editar_tipo');
Route::post('tipo/eliminar',[TipoDocumentoController::class,'eliminar'])->name('eliminar_tipo');

Route::get('estado',[EstadoController::class,'index'])->name('configuracion_ver_estado');
Route::post('estado',[EstadoController::class,'guardar_estado'])->name('configuracion_guardar_estado');

Route::post('estado/buscar',[EstadoController::class,'buscar'])->name('buscar_estado');
Route::post('estado/eliminar',[EstadoController::class,'eliminar'])->name('eliminar_estado');

Route::get('modelo',[ModeloController::class,'index'])->name('configuracion_ver_modelo');
Route::post('modelo',[ModeloController::class,'guardar_modelo'])->name('configuracion_guardar_modelo');

Route::get('documento',[DocumentoController::class,'index'])->name('configuracion_ver_documento');
Route::post('documento',[DocumentoController::class,'guardar_documento'])->name('configuracion_guardar_documento');
Route::get('buscar_archivo',[DocumentoController::class,'buscar_documento'])->name('buscar_documento');
Route::post('documento/editar',[DocumentoController::class,'editar'])->name('editar_envio');
Route::post('documento/eliminar',[DocumentoController::class,'eliminar'])->name('eliminar_envio');