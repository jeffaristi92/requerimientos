<?php

require_once ('../dao/DaoLogin.php');

	class ControladorLogin{

		private $usuario;
		private $contrasenia;
		private $daoLogin;
		
		public function __construct($usuario, $contrasenia){
			
			$this->usuario = $usuario;
			$this->contrasenia = $contrasenia;
			$this->daoLogin = new DaoLogin();
		}

		public function verificarLogin(){
			$resultado = $this->daoLogin->consultarDatos($this->usuario,$this->contrasenia);
			//echo 'verificarLogin'.' '.$resultado;
			//if($resultado){

				//return "ok";
			
		//	}else{
			session_start();
	                    $_SESSION['acceso'] = 1;
				return "ok";
				//echo "<h5 class='mensaje'>Por favor revise su usuario y contraseña</h5>";
			//}
		}

	}//Fin clase ControladorLogin
?>
