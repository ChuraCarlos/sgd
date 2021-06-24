@extends('usuario.inicio')
@section('formulario')
<form action="{{ route('concentracion.imprimir') }}" method="post" accept-charset="utf-8">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="bg-info text-white text-center p-2">SOLICITUD PARA CONCENTTRACIONES PUBLICAS</h2>
			</div>
		</div>
		<hr>
		<div class="row">
{{-- 			<div class="col-md-6">
				<label>Director General de Gobierno Interior / Subprefecto distrital</label>
				<select class="custom-select custom-select-sm" name="director" id="director">
					<option value="moquegua">moquegua</option>
				</select>
			</div> --}}
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
				<h4 class="bg-info text-white text-center p-2">Datos del Solicitante</h4>
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
			<div class="col-md-4">
				<label>Documento</label>
				<input type="text" class="form-control form-control-sm" name="documento" id="documento" />
			</div>
			<div class="col-md-4">
				<label>Telefono</label>
				<input type="text" class="form-control form-control-sm" name="telefono" id="telefono" />
			</div>
			<div class="col-md-4">
				<label>Domicilio</label>
				<input type="text" class="form-control form-control-sm" name="domicilio" id="domicilio" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Correo</label>
				<input type="text" class="form-control form-control-sm" name="correo" id="correo" />
			</div>
			<div class="col-md-6">
				<label>Razon Social</label>
				<input type="text" class="form-control form-control-sm" name="razon" id="razon" />
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<h4 class="bg-info text-white text-center p-2">DATOS DEL EVENTO</h4>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-3">
				<label>Fecha de la concentracion</label>
				<input type="date" class="form-control form-control-sm" name="ter_fecha" id="ter_fecha" />
			</div>
			<div class="col-md-3">
				<label>inicio</label>
				<input type="time" class="form-control form-control-sm" name="ter_inicio" id="ter_inicio" />
			</div>
			<div class="col-md-3">
				<label>termino</label>
				<input type="time" class="form-control form-control-sm" name="ter_termino" id="ter_termino" />
			</div>
			<div class="col-md-3">
				<label>lugar de la concentracion</label>
				<input type="text" class="form-control form-control-sm" name="ter_lugar" id="ter_lugar" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Motivo</label>
				<input type="text" class="form-control form-control-sm" name="ter_motivo" id="ter_motivo" />
			</div>
			<div class="col-md-6">
				<label>Ruta</label>
				<input type="text" class="form-control form-control-sm" name="de_ruta" id="de_ruta" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Numero de asistentes</label>
				<input type="text" class="form-control form-control-sm" name="de_asistentes" id="de_asistentes" />
			</div>
			<div class="col-md-6">
				<label>CARACTERÍSTICAS PARTICULARES DE LA CONCENTRACIÓN Y FUNDAMENTAR EL MOTIVO DE LA CONCENTRACIÓN</label>
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