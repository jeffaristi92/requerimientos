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
		<h2>Historial de cambios</h2>
		<br>
			<div class="col-md-12">	
				<table>
					<tr>
						<td >Fecha</td>
						<td >Descripción del Cambio a Realizar</td>
						<td >Mapa CLIENTE - TIPO DOC</td>
						<td >Campo entrada</td>
						<td >Campo salida</td>
						<td >Ejemplo Actual del Campo</td>
						<td >Ejemplo Final del Campo</td>
						<td >Tipo de Cambio</td>
						<td >Responsable</td>
						<td >Estado</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'pie.php' ?>