<?php


?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>eliminar archivo seleccionado</title>
  
</head>
<body>

<p>Seleccione el archivo a eliminar</p>

<?php
	$ficheros = scandir('archivos');
	foreach($ficheros as $archivo){
		if($archivo != '.' && $archivo != '..'){
		$a = urlencode($archivo);
		echo "<li> <a href=\"eliminar.php?archivo=$a\"  >$archivo</a> </li>";
		}
}
?>



</body>
</html>
