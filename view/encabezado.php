<?php	
   session_start();
   $opcion = @$_GET['opcion'];

	if(@$_SESSION['acceso'] == 1){
	}else{
		echo "<script type='text/javascript' language='javascript'>
				location.href='../index.php';
			</script>";	
	}	
?>

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
   		
	<title>Requerimientos APP</title>
	<link rel="stylesheet" href="../css/estilo.css" type="text/css" />
	<script src="../js/funciones.js" type="text/javascript"></script>  
	<meta charset="utf-8">
</head>
<body topmargin="0" rightmargin="0">