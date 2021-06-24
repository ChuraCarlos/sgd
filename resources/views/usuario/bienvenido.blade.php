@extends('usuario.inicio')
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