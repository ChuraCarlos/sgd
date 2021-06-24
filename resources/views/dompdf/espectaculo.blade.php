<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Garantias Personales</title>
</head>
<style type="text/css">
	.cuadro{
		/*border: 1px solid black;*/
		width: 100%;
	}
	.cuadro>p{
		font-size: 14px;
	}
	.titulo{
		text-align: center;
		padding: 0px;
		margin: 0px;
		font-weight: 600;
	}
	.firma{
		display: block;
		text-align: center;
		padding: 0px;
		margin: 0px;
		font-weight: 600;
	}
	.sub{
		padding: 0px;
		margin: 0px;
		font-weight: 600;
	}
	label{
		border-bottom: 1px dashed black;
	}
	.derecha{
		text-align: right;
	}
	.separar{
		margin-top:90px;
	}
	.linea-arriba>label{
		border-top: 1px solid black;
	}
</style>
<body>
	<div class="cuadro">
		<div>DGIN</div>
		<div>FORMULARIO: T-13</div>
		<div class="titulo">
			<div>SOLICITUD DE OTORGAMIENTO DE GARANTÍAS INHERENTES AL ORDEN PÚBLICO PARA EVENTOS SOCIALES O ESPECTÁCULOS PÚBLICOS NO
DEPORTIVOS</div>
			<div>(HASTA CON 3000 ASISTENTES)</div>
		</div>
		<p>DIRECTOR GENERALDE GOBIERNO INTERIOR /SUBPREFECTO DISTRITAL DE LA</p>
		<p>PROVINCIA <label>{{ $provincia }}</label> REGION <label>{{ $region }}</label></p>
		<div class="sub">DATOS DEL SOLICITANTE</div>
		<div>NOMBRES, APELLIDOS Y TELF. (Del Representante Legal en caso de ser persona jurídica)</div>
		<div><label>{{ $nombre }} {{ $paterno }} {{ $materno }} - {{ $telefono }}</label></div>
		<div>RAZÓN SOCIAL DE LA EMPRESA (Si se tratara de persona jurídica)</div>
		<div><label>{{ $razon }}</label></div>
		<div>Dirección de Correo Electrónico que autorizo para las notificaciones que correspondieran</div>
		<div><label>{{ $correo }}</label></div>
		<div class="sub">DATOS DEL EVENTO:</div>
		<div>FECHA: <label>{{ $ter_fecha }}</label>HORA: INICIO <label>{{ $ter_inicio }}</label> TERMINO: <label>{{ $ter_termino }}</label></div>
		<div>LUGAR:</div>
		<div>LOCAL PRIVADO {{ $ter_lugar=="LOCAL PRIVADO" ? 'X':'' }} LOCAL INSTITUCIONAL {{ $ter_lugar=="LOCAL INSTITUCIONAL" ? 'X':'' }} VÍA PÚBLICA {{ $ter_lugar=="LOCAL PUBLICA" ? 'X':'' }}</div>
		<div>UBICACION: <label>{{ $ter_ubicacion }}</label></div>
		<div>DATOS ADICIONALES QUE ESTIME NECESARIO INDICAR (Si se va a efectuar con conjunto
musical, indicar el nombre del mismo)</div>
		<div><label>{{ $ter_adicional }}</label></div>
		<p class="derecha">LUGAR Y FECHA <label>{{ $lugar }} {{ $fecha }}</label></p>
		
		<div class="firma separar">
			<div class="linea-arriba"><label>FIRMA (O HUELLA DIGITAL) DEL RECURRENTE</label></div>
			<div>Documento de Identidad</div>
			<div>(Del Representante Legal en caso de ser persona jurídica)</div>
		</div>
		
	</div>
</body>
</html>