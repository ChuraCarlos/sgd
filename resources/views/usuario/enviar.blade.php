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
					<table class="table table-sm table-bordered">
						<thead>
							<tr>
								<th>Nro</th>
								<th>Modelo</th>
								<th>Descripcion</th>
								<th>fecha</th>
								<th>Enviar</th>
								<th>Observacion</th>
								<th>Adjunto</th>
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
								<td>{{ $documento->nro_adjunto }}</td>
								<td>No enviado</td>
								<td><a href="{{ $documento->ruta }}">Ver Documento</a></td>
								<td>
									<button class="btn btn-warning" data-target="#modal_enviar" data-toggle="modal" onclick="editar('{{ $documento->id_documento }}','{{ $documento->id_modelo }}','{{ $documento->descripcion }}','{{ $documento->f_registro }}','{{ $documento->id_area }}','{{ $documento->observacion }}','{{ $documento->nro_adjunto }}')">E</button>
								</td>
								<td><button class="btn btn-danger" onclick="eliminar('{{ $documento->id_documento }}');">X</button></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		{{-- </form> --}}
	</div>



	<form action="{{ route('eliminar_envio') }}" method="post" id="quitar" accept-charset="utf-8">
		@csrf
		<input type="hidden" name="identi" id="identi">
	</form>

<form action="{{ route('editar_envio') }}" method="post" id="editar" accept-charset="utf-8">
		@csrf
<div class="modal fade" id="modal_enviar" tabindex="-1" aria-labelledby="modal_cargo" aria-hidden="true">
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
			<label class="form-label">Enviar</label>
			<select class="custom-select custom-select-sm" name="area" id="area">
				@foreach($areas as $area)
				<option value="{{ $area->id_area }}">{{ $area->nombre_area }}</option>
				@endforeach
			</select>
			<label class="form-label">modelo</label>
			<select class="custom-select custom-select-sm" name="modelo" id="modelo">
				@foreach($modelos as $modelo)
				<option value="{{ $modelo->id_modelo }}">{{ $modelo->nombre_modelo }}</option>
				@endforeach
			</select>
			<label class="form-label">Descripcion</label>
			<input type="text" class="form-control" name="descripcion" id="descripcion">
			<label class="form-label">Fecha de Registro</label>
			<input type="date" class="form-control" name="fecha" id="fecha">
			<label class="form-label">Observacion</label>
			<input type="text" class="form-control" name="observacion" id="observacion">
			<label class="form-label">Documento a Subir</label>
			<input type="file" class="form-control" name="documento" id="documento">
			<label class="form-label">Nro de Documento Adjunto</label>
			<input type="number" class="form-control" name="adjunto" id="adjunto">
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

<script src="{{ asset('js/enviar.js') }}"></script>
@endsection