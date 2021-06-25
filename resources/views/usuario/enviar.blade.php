@extends('usuario.inicio')
@section('formulario')
	<div class="container">
		{{-- <form action="" method="post" accept-charset="utf-8">
		@csrf --}}
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body shadow-sm">
							<h1>Lista de Documentos</h1>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-sm">
						<thead>
							<tr>
								<th>Nro</th>
								<th>Modelo</th>
								<th>Descripcion</th>
								<th>fecha</th>
								<th>Enviar</th>
								<th>Observacion</th>
								<th>Estado</th>
								<th>Documento</th>
								<th>Editar</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							@foreach($documentos as $documento)
							<tr>
								<td>{{ ($loop->index)+1 }}</td>
								<td>{{ $documento->nombre_modelo }}</td>
								<td>{{ $documento->descripcion }}</td>
								<td>{{ $documento->f_registro }}</td>
								<td>{{ $documento->nombre_area }}</td>
								<td>{{ $documento->observacion }}</td>
								<td>No enviado</td>
								<td><a href="{{ $documento->ruta }}" title="">Ver Documento</a></td>
								<td><button class="btn btn-warning">E</button></td>
								<td><button class="btn btn-danger">X</button></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		{{-- </form> --}}
	</div>
@endsection