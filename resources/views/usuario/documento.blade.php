@extends('usuario.inicio')
@section('formulario')
	<div class="container">
		<form action="{{ route('configuracion_guardar_documento') }}" method="post" accept-charset="utf-8">
		@csrf
			<div class="row">
				<div class="col-md-6">
					<label>Asunto Documento</label>
					<input type="text" class="form-control form-control-sm" name="asunto" id="asunto">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Numero de Documento</label>
					<input type="number" class="form-control form-control-sm" name="numero" id="numero">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Modelo de Documento</label>
					<select class="custom-select custom-select-sm" name="modelo" id="modelo">
					@foreach($modelos as $modelo)
					<option value="{{ $modelo->id_modelo }}"> {{ $modelo->nombre_modelo }}</option>
					@endforeach
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Descripcion del Documento</label>
					<input type="text" class="form-control form-control-sm" name="descripcion" id="descripcion">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Fecha de Registro</label>
					<input type="date" class="form-control form-control-sm" name="fecha" id="fecha">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Dirigir Documento</label>
					<select class="custom-select custom-select-sm" name="dirigir" id="dirigir">
					@foreach($areas as $area)
					<option value="{{ $area->id_area }}"> {{ $area->nombre_area }}</option>
					@endforeach
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Observacion</label>
					<input type="text" class="form-control form-control-sm" name="observacion" id="observacion">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Nro de Documentos Adjuntos</label>
					<input type="number" class="form-control form-control-sm" name="adjunto" id="adjunto" value="1">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Subir Documento</label>
					<input type="file" class="form-control form-control-sm" name="subir" id="subir">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<button class="btn btn-success">Guardar</button>
				</div>
			</div>
		</form>
	</div>
@endsection