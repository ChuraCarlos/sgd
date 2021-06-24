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
		<div>ONAGI</div>
		<div>FORMULARIO: T-15</div>
		<div class="titulo">
			<div>SOLICITUD DE GARANTÍAS PARA CONCENTRACIONES PÚBLICAS DE ÍNDOLE SOCIAL</div>
		</div>
		<p>SEÑOR JEFE DE LA OFICINA NACIONAL DE GOBIERNO INTERIOR / GOBERNADOR DE LA</p>
		<p>PROVINCIA <label>{{ $provincia }}</label> REGION <label>{{ $region }}</label></p>
		<div>Por el presente, solicito a usted, el otorgamiento de garantías para realización de la concentración
pública que se ha programado y para lo cual se informa lo siguiente :</div>
		<div class="sub">DATOS DEL SOLICITANTE</div>
		<div>NOMBRES Y APELLIDO <label>{{ $nombre }} {{ $paterno }} {{ $materno }}</label></div>
		<div>DOCUMENTO DE IDENTIDAD <label>{{ $documento }}</label> TELEFONO: <label>{{ $telefono }}</label></div>
		<div>DOMICILIO<label>{{ $domicilio }}</label></div>
		<div>NOMBRE O RAZÓN SOCIAL DE LA ORGANIZACIÓN <label>{{ $razon }}</label></div>
		<div>Dirección(es) de Correo(s) Electrónico(s) que autorizo para las notificaciones que correspondieran <label>{{ $ter_lugar }}</label></div>
		<div class="sub">DATOS DEL EVENTO :</div>
		<div>FECHA <label>{{ $ter_fecha }}</label> HORA: INICIO <label>{{ $ter_inicio }}</label> TERMINO <label>{{ $ter_termino }}</label></div>
		<div>MOTIVO <label>{{ $ter_motivo }}</label></div>
		<div>LUGAR <label>{{ $ter_lugar }}</label></div>
		<div>RUTA PARA DESPLAZAMIENTO y LUGARES DE PRECONCENTRACIONES</div>
		<div><label>{{ $de_ruta }}</label></div>
		<div>NÚMERO DE ASISTENTES (Aproximado, de no contarse con el número exacto) :</div>
		<div><label>{{ $de_asistentes }}</label></div>
		<div>CARACTERÍSTICAS PARTICULARES DE LA CONCENTRACIÓN Y FUNDAMENTAR EL MOTIVO DE LA CONCENTRACIÓN</div>
		<p><label>{{ $de_motivo }}</label></p>
		<p class="derecha">LUGAR Y FECHA <label>{{ $lugar }} {{ $fecha }}</label></p>
		
		<div class="firma separar">
			<div class="linea-arriba"><label>FIRMA DEL DEMANDANTE</label></div>
			<div>(Huella digital de no saber escribir)</div>
		</div>
		
	</div>
</body>
</html>