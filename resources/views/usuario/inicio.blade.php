<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SGD</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<script src="{{ asset('jquery/jquery.js') }}" type="text/javascript" charset="utf-8"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript" charset="utf-8"></script>
</head>
<body class="principal">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 mt-3">
			<div class="list-group list-group-flush">
				@if(Session::get('tipo')=="usuario")
				<a href="{{ route('personal.inicio') }}" class="list-group-item">garantias personales</a>
				<a href="{{ route('espectaculo.inicio') }}" class="list-group-item">garantias para espectaculos</a>
				<a href="{{ route('concentracion.inicio') }}" class="list-group-item">contentraciones publicas</a>
				<a href="{{ route('buscar_documento') }}" class="list-group-item">Buscar Documento</a>
				{{-- <a href="{{ route('') }}" class="list-group-item">Bandeja de Documentos</a> --}}
				<a href="{{ route('configuracion_ver_documento') }}" class="list-group-item">Generar Documento</a>
				@endif
				@if(Session::get('tipo')=="administrador")
				<a href="{{ route('usuario.formulario') }}" class="list-group-item">Generar Usuario</a>
				<a href="{{ route('configuracion_ver_area') }}" class="list-group-item">Registrar Areas</a>
				<a href="{{ route('configuracion_ver_cargo') }}" class="list-group-item">Registrar Cargos</a>
				<a href="{{ route('configuracion_ver_estado') }}" class="list-group-item">Registrar Estados</a>
				<a href="{{ route('configuracion_ver_tipo') }}" class="list-group-item">Registrar Tipo de Documento</a>
				@endif
			</div>
		</div>
		<div class="col-md-9 mt-3">
			@yield('formulario')		
		</div>
	</div>
</div>

	
</body>
</html>