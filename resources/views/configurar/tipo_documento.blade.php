@extends('usuario.inicio')
@section('formulario')
	<div class="container">
		<form action="{{ route('configuracion_guardar_tipo') }}" method="post" accept-charset="utf-8">
		@csrf
			<div class="row">
				<div class="col-md-12">
					<h1>REGISTRO DE TIPO DE DOCUMENTO</h1>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<label>Nombre del Tipo de Documento</label>
					<input type="text" class="form-control form-control-sm" name="tipo" id="tipo">
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
	<br>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-sm">
						<thead>
							<tr>
								<th>Nro</th>
								<th>Tipo de Documento</th>
								<th>Editar</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tipos as $tipo)
							<tr>
								<td>{{ $loop->index+1 }}</td>
								<td>{{ $tipo->nombre_tipo }}</td>
								<td>
									<button class="btn btn-warning btn-sm" onclick="editar('{{ $tipo->id_tipo_documento }}','{{ $tipo->nombre_tipo }}');" data-toggle="modal" data-target="#modal_tipo">E</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm" onclick="eliminar('{{ $tipo->id_tipo_documento }}');">X</button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

<form action="{{ route('eliminar_tipo') }}" method="post" id="quitar" accept-charset="utf-8">
		@csrf
		<input type="hidden" name="identi" id="identi">
	</form>

<form action="{{ route('editar_tipo') }}" method="post" id="buscar" accept-charset="utf-8">
		@csrf
<div class="modal fade" id="modal_tipo" tabindex="-1" aria-labelledby="modal_tipo" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	
					<div class="mb-3">
				  <label class="form-label">Nombre de Area</label>
				  <input type="text" class="form-control" name="nombre" id="nombre">
				  <input type="hidden" id="iden" name="iden">
					</div>
				
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
</form>

<script src="{{ asset('js/tipo.js') }}"></script>
@endsection