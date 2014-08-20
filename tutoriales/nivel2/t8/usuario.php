<?php
session_start();

?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>José Casanova</title>
  
</head>
<body>
	<h1></h1>
	
	<p>
	<?php
	 if(  $_SESSION['logueado'] ){
		if($_SESSION['rol'] == 'usuario' ){
			echo 'Buenos Días '.$_SESSION['usuario'];
		}else{
			echo 'No tienes privilegios para estar aquí';
		}
		
		
	 }else{
		header('Location: index.php');
	 }
	?>
	</p>
	
	<a href="logout.php">cerrar sesión</a>
	
</body>
</html>