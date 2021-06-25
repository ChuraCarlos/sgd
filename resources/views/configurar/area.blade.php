@extends('usuario.inicio')
@section('formulario')
	<div class="container">
		<form action="{{ route('configuracion_guardar_area') }}" method="post" accept-charset="utf-8">
		@csrf
			<div class="row">
				<div class="col-md-12">
					<h1>REGISTRO DE AREA</h1>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<label>Nombre del area</label>
					<input type="text" class="form-control form-control-sm" name="area" id="area">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<button class="btn btn-success">Guardar</button>
				</div>
			</div>
		</form>
				<br>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-sm">
						<thead>
							<tr>
								<th>Nro</th>
								<th>Cargo</th>
								<th>Editar</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							@foreach($areas as $area)
							<tr>
								<td>{{ $loop->index+1 }}</td>
								<td>{{ $area->nombre_area }}</td>
								<td>
									<button class="btn btn-warning btn-sm" onclick="editar('{{ $area->id_area }}','{{ $area->nombre_area }}');" data-toggle="modal" data-target="#modal_area">E</button>
								</td>
								<td>
									<button class="btn btn-danger btn-sm" onclick="eliminar('{{ $area->id_area }}');">X</button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<form action="{{ route('eliminar_area') }}" method="post" id="quitar" accept-charset="utf-8">
		@csrf
		<input type="hidden" name="identi" id="identi">
	</form>

<form action="{{ route('buscar_area') }}" method="post" id="buscar" accept-charset="utf-8">
		@csrf
<div class="modal fade" id="modal_area" tabindex="-1" aria-labelledby="modal_area" aria-hidden="true">
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

<script src="{{ asset('js/area.js') }}"></script>
@endsection