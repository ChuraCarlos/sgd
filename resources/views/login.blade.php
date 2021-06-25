<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SGD</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<script src="{{ asset('jquery/jquery.min.js') }}" type="text/javascript" charset="utf-8"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	
		<div class="container-fluid escudo">
			<div class="row vh-100 justify-content-center align-items-center">
				<div class="col-4 p-5 shadow-lg fondo">
				<form action="{{ route('verificar') }}" method="post" accept-charset="utf-8">
				@csrf
				<div>
						<label>Login</label>
						<input type="text" class="form-control form-control-sm" name="login" id="login">
						<span class="text-danger">@error('login'){{ $message }} @enderror</span>	
				</div>
				<div>
						<label>Password</label>
						<input type="password" class="form-control form-control-sm" name="clave" id="clave">
						<span class="text-danger">@error('clave'){{ $message }} @enderror</span>		
				</div>
				<br>
				<div>
						<button type="submit" class="btn btn-success btn-sm btn-block">Ingresar</button>
				</div>
				</form>
				<br>
				<h5>SUBPREFECTURA PROVINCIAL DE ILO</h5>
				</div>

			</div>

		</div>

</body>
</html>