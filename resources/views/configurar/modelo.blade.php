@extends('usuario.inicio')
@section('formulario')
	<div class="container">
		<form action="{{ route('configuracion_guardar_modelo') }}" method="post" accept-charset="utf-8">
		@csrf
			<div class="row">
				<div class="col-md-6">
					<label>Nombre del Modelo</label>
					<input type="text" class="form-control form-control-sm" name="modelo" id="modelo">
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