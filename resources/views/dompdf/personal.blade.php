<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Garantias Personales</title>
</head>
<style type="text/css">
	.cuadro{
		border: 1px solid black;
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
		margin-top:20px;
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
			<div>SOLICITUD DE GARANTÍAS PERSONALES</div>
			<div>(Con carácter de Declaración Jurada)</div>
		</div>
		<p>DIRECTOR GENERALDE GOBIERNO INTERIOR /SUBPREFECTO DISTRITAL DE <label>{{ $director }}</label></p>
		<p>PROVINCIA <label>input{{ $provincia }}</label> REGION <label>{{ $region }}</label></p>
		<div class="sub">DATOS DEL SOLICITANTE(INTERESADO)</div>
		<div class="sub">(En caso de persona jurídica, llenar datos del representante legal, adjuntando documento que acredite la representatividad)</div>
		<div>NOMBRES Y APELLIDO <label>{{ $nombre }} {{ $paterno }} {{ $materno }}</label></div>
		<div>NACIONALIDAD <label>{{ $nacionalidad }}</label>  DOCUMENTO DE IDENTIDAD <label>{{ $documento }}</label></div>
		<div>DOMICILIO Y TF <label>{{ $domicilio }}</label></div>
		<div>(Referencias para suubicación).</div>
		<div>EDAD <label>{{ $edad }}</label> OCUPACION <label>{{ $ocupacion }}</label></div>
		<div>CENTRO DE TRABAJO <label>{{ $centro }}</label></div>
		<div>Dirección de Correo Electrónico que autorizo para las notificaciones que correspondieran <label>{{ $correo }}</label></div>
		<div class="sub">EN CASO DE QUE LA SOLICITUD LA PRESENTE UNA TERCERA PERSONA</div>
		<div>NOMBRES Y APELLIDOS DE LA TERCERA PERSONA <label>{{ $ter_nombre }}</div>
		<div>NACIONALIDAD <label>{{ $ter_nacionalidad }}</label> DOCUMENTO DE IDENTIDAD <label>{{ $ter_documento }}</label></div>
		<div>DOMICILIO Y TF <label>{{ $ter_domicilio }}</label></div>
		<div class="sub">(Referencias para su ubicación).</div>
		<div>EDAD <label>{{ $ter_edad }}</label> OCUPACION <label>{{ $ter_ocupacion }}</label></div>
		<div>AFINIDAD CON EL INTERESADO <label>{{ $ter_afinidad }}</label></div>
		<div>CENTRO DE TRABAJO <label>{{ $ter_centro }}</label></div>
		<div>Dirección de Correo Electrónico que autorizo para las notificaciones que correspondieran <label>{{ $ter_correo }}</label></div>
		<div class="sub">DATOS DEL (O LOS) DENUNCIADO(S)</div>
		<div>NOMBRE(S)YAPELLIDOS: <label>{{ $de_nombre }}</label></div>
		<div>DOMICILIO(S): <label>{{ $de_domicilio }}</label></div>
		<div>EDAD (ES) (Aproximadamente, en caso no tener conocimiento: <label>{{ $de_edad }}</label></div>
		<div>OTRAS REFERENCIAS:</div>
		<div>CENTRO DE LABORES (De ser conocida): <label>{{ $de_centro }}</label></div>
		<h5>MOTIVO DE LA SOLICITUD DE GARANTÍAS</h5>
		<p><label>{{ $de_motivo }}</label></p>
		<h5>DECLARO BAJO JURAMENTO QUE EL ASUNTO, MATERIA DE LA PRESENTE SOLICITUD
NO SE ENCUENTRA EN PROCESO JUDICIAL.</h5>
		<p class="derecha">LUGAR Y FECHA <label>{{ $lugar }} {{ $fecha }}</label></p>
		
		<div class="firma">
			<div class="linea-arriba"><label>FIRMA DEL DEMANDANTE</label></div>
			<div>(Huella digital de no saber escribir)</div>
		</div>
		
	</div>
</body>
</html>