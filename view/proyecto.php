<?php include 'encabezado.php' ?>
<?php include 'menu.php' ?>

<div class="container deportista">
	<div class="row">
		<div class="wrapper">
		
		<form class="form-signin" role="form" method="GET">
			<h2>Registrar Proyecto</h2>
			<br>
			<div class="col-md-12">
              	<div class="col-md-6">
              		<input id="nombre"   type="text"   class="form-control" placeholder="Nombre *" autofocus/>
                	<input id="fecha" type="text"   class="form-control" placeholder="Fecha *"/>
              	</div>						
				<div class="col-md-6">
				<input id="cliente" type="text"   class="form-control" placeholder="Cliente *"/>
              		<select id="pais" class="form-control">
                   		<option value="PE">Peru</option>
                   		<option value="CO">Colombia</option>
						<option value="ARG">Argentina</option>
						<option value="CO">Venezuela</option>
						<option value="CO">Mexico</option>
                	</select>
				</div>   
			</div>	

			<br>
			<br>
			<h2>Verificaciones requeridas</h2>
			<br>
			<div class="col-md-12">
				<div class="col-md-6">
					¿Debe validarse la estructura del nombre del archivo de entrada?
					<br><input type="checkbox" name="validarEstructuraEntrada" value="si">Si<br>
					
					¿Debe validarse la estructura del nombre del archivo de salida?
					<br><input type="checkbox" name="validarEstructuraSalida" value="si">Si<br>
					
					¿El archivo de entrada fue procesado por el  CORE de CT&S?
					<br><input type="checkbox" name="entradaPorcesada" value="si">Si<br>
					
					¿El archivo de salida  será procesado por el  CORE de CT&S?
					<br><input type="checkbox" name="salidaProcesada" value="si">Si<br>
					
					¿Deben incluirse en el log los documentos procesados correctamente?
					<br><input type="checkbox" name="logCorrectos" value="si">Si<br>
					
					¿Se reciben multiples documentos en el mismo archivo?
					<br><input type="checkbox" name="multiplesEntrada" value="si">Si<br>
					
					¿Se generan multiples documentos en el mismo archivo de salida?
					<br><input type="checkbox" name="multiplesSalida" value="si">Si<br>
					
					Cuando la entrada es generada por el cliente 
					¿Debe validarse la cantidad de campos del documento? 
					<br><input type="checkbox" name="validarCantidadCampos" value="si">Si<br>
					
					¿El mapa involucra una BD?
					<br><input type="checkbox" name="involucraBD" value="si">Si<br>
					
					Manejo del consecutivo para generación del Send Reference SNRF. ¿ Lo genera CT&S?
					<br><input type="checkbox" name="manejaConsecutivo" value="si">Si<br>
					
					Debe validarse la codificacion del archivo de entrada?
					<br><input type="checkbox" name="codificacionEntrada" value="si">Si<br>
					
					Debe validarse la codificacion del archivo de salida?
					<br><input type="checkbox" name="codificacionSalida" value="si">Si<br>
					
					Cumple con los requerimientos mínimos de Hardware definidos en el documento "REQUERIMIENTOS HARDWARE Y SOFTWARE_v2.0.pdf"
					<br><input type="checkbox" name="cumpleRequerimientos" value="si">Si<br>
					
					
					
					Si se encuentran caracteres especiales (eje: # % & @ ') en el archivo de entrada. 
					¿Cual debe ser el comportamiento del mapa?
					<br>
					<select name="Seccion">
						<option value="cabecera">Reemplazar caracteres</option>
						<option value="detalle">Detener procesamiento</option>
						<option value="resumen">N/A</option>
					</select>
					<br>
					
					Cuando hay varios documentos dentro de un mismo archivo fisico, y uno de ellos  tiene errores.
					¿ Que se debe hacer?
					<br>
					<select name="Seccion">
						<option value="cabecera">Procesar Correctos</option>
						<option value="detalle">Detener procesamiento</option>
						<option value="resumen">N/A</option>
					</select>
					<br>
					
				</div>
				<div class="col-md-6">
					Cuando se hacen referencias cruzadas y el dato a buscar no se encuentra 
					¿Que se debe hacer?
					<br>
					<select name="Seccion">
						<option value="cabecera">Tomar primer valor</option>
						<option value="detalle">Detener procesamiento</option>
						<option value="resumen">N/A</option>
					</select>
					<br>
					
					Si la longitud del campo de salida es mas pequeña que la del campo de entrada .
					¿ Que se debe hacer?
					<br>
					<select name="Seccion">
						<option value="cabecera">Truncar valor</option>
						<option value="detalle">Detener procesamiento</option>
						<option value="resumen">N/A</option>
					</select>
					<br>
					
					Tipo de Solución
					<br>
					<select name="Seccion">
						<option value="cabecera">Cliente</option>
						<option value="detalle">Hosteado</option>
					</select>
					<br>
					
					Validación Plataforma del S.O ¿Corre a 64 o 32 Bits?
					<br>
					<select name="Seccion">
						<option value="cabecera">32</option>
						<option value="detalle">64</option>
					</select>
					<br>
					
					Separador de los archivos planos de Entrada
					<input id="pais"     type="text"  class="form-control" placeholder="Separador Entrada"/>
					
					Separador de los archivos planos de Salida
					<input id="pais"     type="text"  class="form-control" placeholder="Separador Salida"/>
					
					Formato de los numeros negativos
					<input id="pais"     type="text"  class="form-control" placeholder="Formato negativos"/>
					
					Separador de Decimales
					<input id="pais"     type="text"  class="form-control" placeholder="Separador Decimales"/>
					
					Separador de Miles
					<input id="pais"     type="text"  class="form-control" placeholder="Separador Miles"/>

					
					Especifique el estandar y la version del mismo con la cual se realizo el levantamiento de información
					<input id="pais"     type="text"  class="form-control" placeholder="Estandar"/>
					
					Nombre completo, Teléfono y correo electrónico de la persona que confirma la revisión del documento de requerimientos mínimos.
					<input id="pais"     type="text"  class="form-control" placeholder="Contacto"/>
					
					<br><br>
					<a class="btn enviar registrar_deportista">Registrar</a>
				</div>
			</div>		
		</form>
		</div>
	</div>
</div>
<?php include 'pie.php' ?>