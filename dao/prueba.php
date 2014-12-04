<?php
	require_once('DaoDeportista.php');
	require_once('../logico/Deportista.php');
	
	$dao = new DaoDeportista();
	$deportista = new Deportista("jeffer2","guarin","1992-10-31","Varon","1144163369","C.C","Cali","","Colombia","",0,"");
	$deportista->setId(2665);
	
	//$dao->actualizarDeportista($deportista);
	
	$deportista = $dao->getDeportista(2573);
	
	echo 'Id:'.$deportista->getId().'<br>';
	echo 'Nombre:'.$deportista->getNombre().'<br>';
	echo 'Apellidos:'.$deportista->getApellidos().'<br>';
	echo 'FechaNacimiento:'.$deportista->getFechaNacimiento().'<br>';
	echo 'Sexo:'.$deportista->getSexo().'<br>';
	echo 'Identificacion:'.$deportista->getIdentificacion().'<br>';
	echo 'TipoIdentificacion:'.$deportista->getTipoIdentificacion().'<br>';
	echo 'Ciudad:'.$deportista->getCiudad().'<br>';
	echo 'Nacionalidad:'.$deportista->getNacionalidad().'<br>';
	
	echo '<div class="col-md-6">
     <input id="nombres"   type="text"   class="form-control" placeholder="Nombres *" autofocus value="'.$deportista->getNombre().'"/>
     <input id="apellidos" type="text"   class="form-control" placeholder="Apellidos *" value="'.$deportista->getApellidos().'"/>
     <select id="sexo" class="form-control">';
	 
	 if($deportista->getSexo()=="Varon"){
		echo '<option value="si" selected="selected">Varon</option>
     	<option value="no">Dama</option>'; 
	 }else{
	 	echo '<option value="si">Varon</option>
     	<option value="no" selected="selected">Dama</option>';
	 }

	 echo '</select>
     <input id="fecha" type="text"   class="form-control" placeholder="Fecha Nacimiento *" value="'.$deportista->getFechaNacimiento().'" />
     </div>						
     <div class="col-md-6">
     <select id="id" class="form-control">';
     
	 if($deportista->getTipoIdentificacion()=="T.I"){
	 	echo '<option value="si" selected="selected">T.I</option>
     <option value="no" >C.C</option>';

	 }else{
	 	echo '<option value="si">T.I</option>
     <option value="no" selected="selected">C.C</option>';

	 }
	      
	 echo '</select>
                                    
     <input id="nro_id"   type="text"  class="form-control" placeholder="Nro Identificación *" value="'.$deportista->getIdentificacion().'" />
     <input id="pais"     type="text"  class="form-control" placeholder="País" value="'.$deportista->getNacionalidad().'" />
     <input id="ciudad"   type="text"  class="form-control" placeholder="Ciudad" value="'.$deportista->getCiudad().'" />
     <div id="club" style="display: none;"><?php echo $_SESSION[\'usuario\']?></div>   
    
     <a class="btn enviar registrar_deportista">Registrar</a>
     <div id="respuesta_deportista"></div>
     </div>'
?>