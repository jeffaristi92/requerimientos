<!DOCTYPE html>
<html>
<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../css/styles.css" type="text/css" rel="stylesheet"/>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="js/html5shiv.js"></script>
	      <script src="js/respond.min.js"></script>
	    <![endif]-->
	    <script type="text/javascript" src="../js/jquery.js"></script>
	    <script type="text/javascript" src="../js/scripts.js"></script>
		<script type="text/javascript" src="../js/prefixfree.min.js"></script> 
   		<script type="text/javascript" src="../js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="../js/registroInscripcion.js"></script>   
   		
	<title>Inicio</title>
	<link rel="stylesheet" href="../css/estilo.css" type="text/css" />
	<script src="../js/funciones.js" type="text/javascript"></script>  
	<meta charset="utf-8">
</head>
<body topmargin="0" rightmargin="0">
<!--Incluimos el menu-->	
	<?php include 'menu.php' ?>
    
<div id="contenedor">
<div id="cuerpo">	
		<div id="navegacion">
			<ul>
				<li><img src="imagenes/logo_sigo.png"/></li>	
				<li><a>Requerimientos</a></li>	
				<li><a href="historial.html">Historial</a></li>
				<li><a href="verificaciones.html">Verificaciones</a></li>
			</ul>
		</div>
			
		<h1>Agregar requerimiento</h1>
		<form>
		<table>
		<tr>
			<td>Seccion</td>
			<td>
				<select name="Seccion">
					<option value="cabecera">Cabecera</option>
					<option value="detalle">Detalle</option>
					<option value="resumen">Resumen</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label">Nombre Segmento / Campo Entrada</td>
            <td class="label">Obligatorio</td>
            <td class="label">Tipo</td>
            <td class="label">Longitud</td>
            <td class="label">Reglas de Validación</td>
            <td class="label">Observaciones</td>
            <td class="label">Nombre Segmento / Campo Salida</td>
            <td class="label">Obligatorio</td>
            <td class="label">Tipo</td>
            <td class="label">Longitud</td>
            <td class="label">Reglas de Validación</td>
            <td class="label">Observaciones</td>
		</tr>
		
			<tr>
				<td><input class="campo" type="text" name="firstname"></td>
				<td>
					<input type="checkbox" name="Obligatorio1" value="si">Si<br>
				</td>
				<td>
					<input type="radio" name="Tipo1" value="Numerico">Numerico<br>
					<input type="radio" name="Tipo1" value="Alfanumerico">Alfanumerico
				</td>
				<td><input class="campo" type="text" name="firstname"></td>
				<td><input class="campo" type="textarea" name="firstname"></td>
				<td><input class="campo" type="textarea" name="firstname"></td>
				<td><input class="campo" type="text" name="firstname"></td>
				<td>
					<input type="checkbox" name="Obligatorio2" value="si">Si
				</td>
				<td>
					<input type="radio" name="Tipo2" value="Numerico">Numerico<br>
					<input type="radio" name="Tipo2" value="Alfanumerico">Alfanumerico
				</td>
				<td><input class="campo" type="text" name="firstname"></td>
				<td><input class="campo" type="textarea" name="firstname"></td>
				<td><input class="campo" type="textarea" name="firstname"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><input class="boton" type="submit" value="Agregar" onclick="prueba()"></td>
			</tr>
		
	</table>
		</form>
		<h1>Lista de requerimientos</h1>
		<div id="menu">
			<ul>
				<li><a href="">Encabezado</a></li>
				<li><a href="">Detalle</a></li>
				<li><a href="">Resumen</a></li>
			</ul>
		</div>
		
		<table>
			<tr>
                <td class="label">Nombre Segmento / Campo Entrada</td>
				<td class="label">Obligatorio</td>
				<td class="label">Tipo</td>
				<td class="label">Longitud</td>
				<td class="label">Reglas de Validación</td>
				<td class="label">Observaciones</td>
				<td class="label">Nombre Segmento / Campo Salida</td>
				<td class="label">Obligatorio</td>
				<td class="label">Tipo</td>
				<td class="label">Longitud</td>
				<td class="label">Reglas de Validación</td>
				<td class="label">Observaciones</td>
			</tr>
			<tr class="even">
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr class="odd">
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><input class="boton" type="submit" value="Actualizar"></td>
				<td><input class="boton" type="submit" value="Borrar"></td>
			</tr>
		</table>

	</div>
</div>
</body>
</html>