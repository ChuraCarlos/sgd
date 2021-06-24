@extends('usuario.inicio')
@section('formulario')
	<div class="container">
		<form action="{{ route('configuracion_guardar_cargo') }}" method="post" accept-charset="utf-8">
		@csrf
			<div class="row">
				<div class="col-md-12">
					<h1>REGISTRO DE CARGO</h1>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<label>Nombre del Cargo</label>
					<input type="text" class="form-control form-control-sm" name="cargo" id="cargo">
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