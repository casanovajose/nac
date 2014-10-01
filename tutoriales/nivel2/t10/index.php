<?php 
//abrimos la conexion
$conexion = mysqli_connect('localhost','root','','curso');
mysqli_set_charset($conexion,'utf8');

//realizamos una consulta y guardamos el resultado
$consulta = 'select * from alumnos';
$resultado = mysqli_query($conexion,$consulta);

//cerramos la conexion
mysqli_close($conexion);

?>
<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
<meta charset="utf-8">
<title>José Casanova</title>
</head>
<body>
	<h1>Tutorial 10 | José Casanova</h1>
	<ul>
	<?php

		while ($fila = mysqli_fetch_array($resultado) ) {
			echo '<li>'.  $fila['nombre'].'  '.$fila['apellido'].'</li>';
		}

	?>
	</ul>	
</body>
</html>









