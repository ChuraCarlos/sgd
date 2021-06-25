@extends("usuario.inicio")
@section("habilitar")
	<a href="{{ route('personal.inicio') }}" class="list-group-item">garantias personales</a>
	<a href="{{ route('espectaculo.inicio') }}" class="list-group-item">garantias para espectaculos</a>
	<a href="{{ route('concentracion.inicio') }}" class="list-group-item">contentraciones publicas</a>
	<a href="{{ route('buscar_documento') }}" class="list-group-item">Buscar Documento</a>
	<a href="" class="list-group-item">Bandeja de Documentos</a>
	<a href="{{ route('configuracion_ver_documento') }}" class="list-group-item">Generar Documento</a>
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