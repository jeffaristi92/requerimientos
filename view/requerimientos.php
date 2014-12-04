<?php include 'encabezado.php' ?>
<?php include 'menu.php' ?>
    
<div class="container deportista">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4">
				<br>
				<br>
				<h4>Seleccionar proyecto:</h4>
				<select id="sexo" class="form-control">
					<option value="si">Varon</option>
					<option value="no">Dama</option>
				</select>
				<br>
				<br>
			</div>
		</div>
		<div class="wrapper">	
		<h2>Agregar requerimiento</h2>
		<form>
			<div class="col-md-12">
				<div class="col-md-6">
					<br>Seccion
					<select name="Seccion">
						<option value="cabecera">Cabecera</option>
						<option value="detalle">Detalle</option>
						<option value="resumen">Resumen</option>
					</select>
					
					<br>Nombre Segmento / Campo Entrada
					<input class="campo" type="text" name="firstname">
					
					<br>Obligatorio<br>
					<input type="checkbox" name="Obligatorio1" value="si">Si<br>
					
					<br>Tipo<br>
					<input type="radio" name="Tipo1" value="Numerico">Numerico<br>
					<input type="radio" name="Tipo1" value="Alfanumerico">Alfanumerico
					
					<br>Longitud
					<input class="campo" type="text" name="firstname">
					
					<br>Reglas de Validación
					<input class="campo" type="textarea" name="firstname">

					<br>Observaciones
					<input class="campo" type="textarea" name="firstname">
				</div>
				<div class="col-md-6">
					<br><br>
					<br>Nombre Segmento / Campo Salida
					<input class="campo" type="text" name="firstname">

					<br>Obligatorio<br>
					<input type="checkbox" name="Obligatorio2" value="si">Si<br>

					<br>Tipo<br>
					<input type="radio" name="Tipo2" value="Numerico">Numerico<br>
					<input type="radio" name="Tipo2" value="Alfanumerico">Alfanumerico
					
					<br>Longitud
					<input class="campo" type="text" name="firstname">
					
					<br>Reglas de Validación
					<input class="campo" type="textarea" name="firstname">

					<br>Observaciones
					<input class="campo" type="textarea" name="firstname">
					<a class="btn enviar registrar_deportista">Registrar</a>
				</div>
			</div>
		</form>
		</div>
	</div>
	
	<div class="row">	
		<div class="wrapper">
			<div class="col-md-12">
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
						<td>Nombre Segmento / Campo Entrada</td>
						<td>Obligatorio</td>
						<td>Tipo</td>
						<td>Longitud</td>
						<td>Reglas de Validación</td>
						<td>Observaciones</td>
						<td>Nombre Segmento / Campo Salida</td>
						<td>Obligatorio</td>
						<td>Tipo</td>
						<td>Longitud</td>
						<td>Reglas de Validación</td>
						<td>Observaciones</td>
					</tr>
				</table>
				<a class="btn enviar registrar_deportista">Actualizar</a>
				<a class="btn enviar registrar_deportista">Borrar</a>
			</div>
		</div>
	</div>
</div>
<?php include 'pie.php' ?>