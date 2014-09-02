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
	<h1>José Casanova | Tutorial 8 | Manejo de sesiones</h1>
	
	<h2>Perfil 'administrador' </h2>
	
	<p>	u
		<?php
			if(  $_SESSION['logueado'] ){
				if($_SESSION['rol'] == 'admin' ){
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

