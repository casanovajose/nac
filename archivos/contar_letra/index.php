<?php

$archivo = fopen("oraciones.txt", "r") or die("No pude abrir el archivo");
$letra = 'a';
$contador = 0;

while(!feof($archivo)) {
	$l = fgetc($archivo);
	
	if( $l == $letra  ){
		++$contador;
	}
}
fclose($archivo);
?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>Cantidad de apariciones letra a</title>
  
</head>
<body>
<p> Cantidad de apariciones de la letra <?php echo $letra; ?> : <?php echo $contador; ?> </p>

</body>
</html>
