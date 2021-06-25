@extends("usuario.inicio")
@section("habilitar")
	<a href="{{ route('usuario.formulario') }}" class="list-group-item">Generar Usuario</a>
	<a href="{{ route('configuracion_ver_area') }}" class="list-group-item">Registrar Areas</a>
	<a href="{{ route('configuracion_ver_cargo') }}" class="list-group-item">Registrar Cargos</a>
	<a href="{{ route('configuracion_ver_estado') }}" class="list-group-item">Registrar Estados</a>
	<a href="{{ route('configuracion_ver_tipo') }}" class="list-group-item">Registrar Tipo de Documento</a>
@endsection
@section('formulario')
	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>BIENVENIDO</h1>
					<p>{{ $nombre }} {{ $paterno }} {{ $materno }}</p>
				</div>
			</div>
	</div>
@endsection