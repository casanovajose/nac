<?php
$oraciones = array();
$archivo = fopen("oraciones.txt", "r") or die("No pude abrir el archivo");

while(!feof($archivo)) {
$oraciones [] = fgets($archivo);
}
fclose($archivo);
?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title></title>
  
</head>
<body>
<h1>Lectura en orden alfabético </h1>
<?php
sort($oraciones,  SORT_STRING);
foreach( $oraciones as $oracion ){
	echo '<p>'.$oracion. ' </p>';
}
?>
</body>
</html>

