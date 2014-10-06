<?php
$borrar = urldecode(  $_GET['archivo'] );
$borrado = unlink('archivos/'.$borrar);


?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>borrando</title>
  
  <p><?php
	if( $borrado ){
		echo "el archivo $borrar fue eliminado";
	}else{
		echo "Ha ocurrido un error al intentar eliminar el archivo $borrar";
	}
  ?>
  </p>
  
  <?php
	$ficheros = scandir('archivos');
	foreach($ficheros as $archivo){
		if($archivo != '.' && $archivo != '..'){
			echo "<li> $archivo </li>";
		}
}
?>
  
  
</head>
<body>

</body>
</html>
