@extends('usuario.inicio')
@section('formulario')
	<div class="container">
		<form action="{{ route('usuario.guardar') }}" method="post" accept-charset="utf-8">
		@csrf
		<div class="row">
			<div class="col-md-4">
				<label>Nombre</label>
				<input type="text" class="form-control form-control-sm" name="nombre" id="nombre">
				<span class="text-danger">@error('nombre'){{ $message }} @enderror</span>	
			</div>
			<div class="col-md-4">
				<label>Apellido Paterno</label>
				<input type="text" class="form-control form-control-sm" name="paterno" id="paterno">
				<span class="text-danger">@error('paterno'){{ $message }} @enderror</span>		
			</div>
			<div class="col-md-4">
				<label>Apellido Materno</label>
				<input type="text" class="form-control form-control-sm" name="materno" id="materno">
				<span class="text-danger">@error('materno'){{ $message }} @enderror</span>		
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<label>Tipo de Documneto</label>
				<select type="text" class="custom-select custom-select-sm" name="tipo" id="tipo">
					@foreach($tipos as $tipo)
					<option value="{{ $tipo->id_tipo_documento }}"> {{ $tipo->nombre_tipo }}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-3">
				<label>Nro de Documento</label>
				<input type="text" class="form-control form-control-sm" name="documento" id="documento">
				<span class="text-danger">@error('documento'){{ $message }} @enderror</span>		
			</div>
			<div class="col-md-3">
				<label>Direccion</label>
				<input type="text" class="form-control form-control-sm" name="direccion" id="direccion">
				<span class="text-danger">@error('direccion'){{ $message }} @enderror</span>		
			</div>
			<div class="col-md-3">
				<label>Celular</label>
				<input type="text" class="form-control form-control-sm" name="celular" id="celular">
				<span class="text-danger">@error('celular'){{ $message }} @enderror</span>		
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label>E-mail</label>
				<input type="text" class="form-control form-control-sm" name="mail" id="mail">
				<span class="text-danger">@error('mail'){{ $message }} @enderror</span>	
			</div>
			<div class="col-md-4">
				<label>Cargo</label>
				<select type="text" class="custom-select custom-select-sm" name="cargo" id="cargo">
					@foreach($cargos as $cargo)
					<option value="{{ $cargo->id_cargo }}">{{ $cargo->nombre_cargo }}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-4">
				<label>Area</label>
				<select type="text" class="custom-select custom-select-sm" name="area" id="area">
					@foreach($areas as $area)
					<option value="{{ $area->id_area }}">{{ $area->nombre_area }}</option>
					@endforeach
				</select>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label>Login</label>
				<input type="text" class="form-control form-control-sm" name="login" id="login">
				<span class="text-danger">@error('login'){{ $message }} @enderror</span>	
			</div>
			<div class="col-md-4">
				<label>clave</label>
				<input type="text" class="form-control form-control-sm" name="clave" id="clave">
				<span class="text-danger">@error('clave'){{ $message }} @enderror</span>	
			</div>
			<div class="col-md-4">
				<label>Tipo de Usuario</label>
				<select type="text" class="custom-select custom-select-sm" name="usuario" id="usuario">
					<option value="administrador">administrador</option>
					<option value="usuario">usuario</option>
				</select>
				<span class="text-danger">@error('usuario'){{ $message }} @enderror</span>	
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">
				<button type="submit" class="btn btn-success btn-sm">Ingresar</button>	
			</div>
		</div>
		</form>
	</div>
@endsection