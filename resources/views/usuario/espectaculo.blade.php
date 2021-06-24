@extends('usuario.inicio')
@section('formulario')
<form action="{{ route('espectaculo.imprimir') }}" target="_blanck" method="post" accept-charset="utf-8">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="bg-info text-white text-center p-2">SOLICITUD DE GARANTIAS PARA ESPECTACULO</h2>
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
				<label>Razon Social</label>
				<input type="text" class="form-control form-control-sm" name="razon" id="razon" />
			</div>
			<div class="col-md-4">
				<label>Correo</label>
				<input type="text" class="form-control form-control-sm" name="correo" id="correo" />
			</div>
			<div class="col-md-4">
				<label>Telefono</label>
				<input type="text" class="form-control form-control-sm" name="telefono" id="telefono" />
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
				<label>Fecha</label>
				<input type="date" class="form-control form-control-sm" name="ter_fecha" id="ter_fecha" />
			</div>
			<div class="col-md-3">
				<label>Inicio</label>
				<input type="time" class="form-control form-control-sm" name="ter_inicio" id="ter_inicio" />
			</div>
			<div class="col-md-3">
				<label>Termino</label>
				<input type="time" class="form-control form-control-sm" name="ter_termino" id="ter_termino" />
			</div>
			<div class="col-md-3">
				<label>Lugar</label>
				<select class="custom-select custom-select-sm" name="ter_lugar" id="ter_lugar">
					<option value="LOCAL PRIVADO">LOCAL PRIVADO</option>
					<option value="LOCAL INSTITUCIONAL">LOCAL INSTITUCIONAL</option>
					<option value="LOCAL PUBLICA">LOCAL PUBLICA</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<label>Ubicacion</label>
				<input type="text" class="form-control form-control-sm" name="ter_ubicacion" id="ter_ubicacion" />
			</div>
			<div class="col-md-3">
				<label>Numero de asistentes</label>
				<input type="text" class="form-control form-control-sm" name="ter_asistentes" id="ter_asistentes" />
			</div>
			<div class="col-md-6">
				<label>DATOS ADICIONALES</label>
				<input type="text" class="form-control form-control-sm" name="ter_adicional" id="ter_adicional" />
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