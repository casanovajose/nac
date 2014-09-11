<!DOCTYPE html>

<html dir="ltr" lang="es">
	<head>
		<meta charset="utf-8">
		<title>contacto</title>
		<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
	<body>	
		<?php 		
			require_once("encabezado.php");		
		?>
		<div id="contenido" >		
			<h2>contacto</h2>	
		
		<form action="contacto2.php" method="post">
			<p>Nombre</p>
			<input type="text" name="nombre" />
			<p>Teléfono</p>
			<input type="text" name="telefono" />
			<p>E-mail</p>
			<input type="text" name="mail" />
			<p>Consulta</p>
			<textarea name="consulta" >
			</textarea>
			<br>
			<input type="submit" name="enviar" />
		</form>
		
		</div>
		<?php 
			require_once("pie.php");
		?>
		
	</body>
</html>