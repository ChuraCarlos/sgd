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
	
		<div class="container-fluid">
			<div class="row vh-100 justify-content-center align-items-center">
				<div class="col-4 bg-light p-5 shadow-lg">
					
				
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
				</div>
			</div>
		</div>

</body>
</html>