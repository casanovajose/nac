<?php

$oracion1 = '';
$oracion2 = '';
$oracion3 = '';
$oracion4 = '';

$nombre = '';

$exito = '';

if( isset( $_POST['enviar'] ) ){
	$oracion1 = $_POST['oracion1'];
	$oracion2 = $_POST['oracion2'];
	$oracion3 = $_POST['oracion3'];
	$oracion4 = $_POST['oracion4'];

	$texto = "$oracion1  \n $oracion2 \n $oracion3 \n $oracion4 ";
	
	$nombre = $_POST['nombre'];
	
	$archivo = fopen($nombre.'.txt', "w") or die("No pude crear el archivo");
	
	fwrite($archivo, $texto);
	
	fclose($archivo);

}

?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title></title>
  
</head>
<body>

<form method="post" action="">
	oración 1:
	<textarea name="oracion1">
		
	</textarea><br/>
	
	oración 2:
	<textarea name="oracion2">
		
	</textarea><br/>
	
	oración 3:
	<textarea name="oracion3">
		
	</textarea><br/>
	
	oración 4:
	<textarea name="oracion4">
		
	</textarea><br/>
	
	Nombre del archivo:
	<input name="nombre" type="text" /> <br/>
	<input name="enviar" type="submit" value="Generar archivo" /> 
	
</form>

</body>
</html>
