@extends('usuario.inicio')
@section('formulario')
<form action="{{ route('personal.imprimir') }}" method="post" accept-charset="utf-8">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="bg-info text-white text-center p-2">SOLICITUD DE GARANTAS PERSONALES</h2>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<label>Director General de Gobierno Interior / Subprefecto distrital</label>
				<select class="custom-select custom-select-sm" name="director" id="director">
					<option value="moquegua">moquegua</option>
				</select>
			</div>
			<div class="col-md-3">
				<label>Provincia</label>
				<select class="custom-select custom-select-sm" name="provincia" id="provincia" >
					<option value="moquegua">moquegua</option>
				</select>
			</div>
			<div class="col-md-3">
				<label>Region</label>
				<select class="custom-select custom-select-sm" name="region" id="region">
					<option value="ilo">ilo</option>
				</select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<h4 class="bg-info text-white text-center p-2">Datos del Solicitante(Interesado)</h4>
				<div class="alert alert-secondary">En caso de persona jurídica, llenar datos del representante legal, adjuntando documento que acredite la representatividad</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label>Nombre</label>
				<input type="text" class="form-control form-control-sm" name="nombre" id="nombre" />
			</div>
			<div class="col-md-4">
				<label>Apellido Paterno</label>
				<input type="text" class="form-control form-control-sm" name="paterno" id="paterno" />
			</div>
			<div class="col-md-4">
				<label>Apellido Materno</label>
				<input type="text" class="form-control form-control-sm" name="materno" id="materno" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Nacionalidad</label>
				<input type="text" class="form-control form-control-sm" name="nacionalidad" id="nacionalidad" />
			</div>
			<div class="col-md-6">
				<label>Documento</label>
				<input type="text" class="form-control form-control-sm" name="documento" id="documento" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Domicilio</label>
				<input type="text" class="form-control form-control-sm" name="domicilio" id="domicilio" />
			</div>
			<div class="col-md-6">
				<label>Correo</label>
				<input type="text" class="form-control form-control-sm" name="correo" id="correo" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Edad</label>
				<input type="text" class="form-control form-control-sm" name="edad" id="edad" />
			</div>
			<div class="col-md-5">
				<label>Ocupacion</label>
				<input type="text" class="form-control form-control-sm" name="ocupacion" id="ocupacion" />
			</div>
			<div class="col-md-5">
				<label>Centro de Trabajo</label>
				<input type="text" class="form-control form-control-sm" name="centro" id="centro" />
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<h4 class="bg-info text-white text-center p-2">EN CASO DE QUE LA SOLICITUD LA PRESENTE UNA TERCERA PERSONA</h4>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<label>Nombre Completos</label>
				<input type="text" class="form-control form-control-sm" name="ter_nombre" id="ter_nombre" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<label>Documento</label>
				<input type="text" class="form-control form-control-sm" name="ter_documento" id="ter_documento" />
			</div>
			<div class="col-md-3">
				<label>Nacionalidad</label>
				<input type="text" class="form-control form-control-sm" name="ter_nacionalidad" id="ter_nacionalidad" />
			</div>
			<div class="col-md-3">
				<label>Edad</label>
				<input type="text" class="form-control form-control-sm" name="ter_edad" id="ter_edad" />
			</div>
			<div class="col-md-3">
				<label>Ocupacion</label>
				<input type="text" class="form-control form-control-sm" name="ter_ocupacion" id="ter_ocupacion" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Domicilio</label>
				<input type="text" class="form-control form-control-sm" name="ter_domicilio" id="ter_domicilio" />
			</div>
			<div class="col-md-3">
				<label>Afinidad con el Interesado</label>
				<input type="text" class="form-control form-control-sm" name="ter_afinidad" id="ter_afinidad" />
			</div>
			<div class="col-md-3">
				<label>Centro de Trabajo</label>
				<input type="text" class="form-control form-control-sm" name="ter_centro" id="ter_centro" />
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<h4 class="bg-danger text-white text-center p-2">DATOS DEL (O LOS) DENUNCIADO(S)</h4>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<label>Nombres Completos</label>
				<input type="text" class="form-control form-control-sm" name="de_nombre" id="de_nombre" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Edad</label>
				<input type="text" class="form-control form-control-sm" name="de_edad" id="de_edad" />
			</div>
			<div class="col-md-10">
				<label>Domicilio</label>
				<input type="text" class="form-control form-control-sm" name="de_domicilio" id="de_domicilio" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Otras Referencias</label>
				<input type="text" class="form-control form-control-sm" name="de_referencia" id="de_referencia" />
			</div>
			<div class="col-md-6">
				<label>Centro de Labores</label>
				<input type="text" class="form-control form-control-sm" name="de_centro" id="de_centro" />
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<h4 class="bg-dark text-white text-center p-2">Motivo de la Solicitud de Garantias</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="text" class="form-control form-control-sm" name="de_motivo" id="de_motivo" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Fecha</label>
				<input type="date" class="form-control form-control-sm" name="fecha" id="fecha" />
			</div>
			<div class="col-md-6">
				<label>Lugar</label>
				<input type="text" class="form-control form-control-sm" name="lugar" id="lugar" />
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12 text-center">
				<input type="submit" class="btn btn-sm btn-outline-success btn-block" value="Guardar"/>
			</div>
		{{-- 	<div class="col-md-6">
				<input type="button" class="btn btn-success btn-sm" value="Descargar"/>
			</div> --}}
		</div>
		<br>
	</div>
</form>
@endsection		