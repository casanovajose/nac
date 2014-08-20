<?php
$alumnos = array(
  1 => array( "nombre" => "José Ramirez", "tp1" => 6, "tp2" => 8 ),
  2 => array( "nombre" => "Aldana López", "tp1" => 9, "tp2" => 9 ),
  3 => array( "nombre" => "Julio García", "tp1" => 9, "tp2" => 1 ),
  4 => array( "nombre" => "Juana Luna", "tp1" => 4, "tp2" => 8 ),
  
);

function verCondicionAlumno(  $tp1, $tp2  ){
	$promedio = ( $tp1 +  $tp2 ) / 2;
	
	if( $promedio < 4 ){
		echo "NO APROBADO";
	}else{
		echo "APROBADO";
	}
	
}



$codigoAlumno = "";
$nombre = "";
$tp1 ="";
$tp2 ="";
if( isset ($_GET['enviar']) ){
	$codigoAlumno = $_GET['alumnos']; 
	$nombre = $alumnos [ $codigoAlumno ]['nombre'] ;
	$tp1 = $alumnos [ $codigoAlumno ]['tp1'] ;
	$tp2 = $alumnos [ $codigoAlumno ]['tp2'] ;
	
} else {	
		header( "Location: index.php" );
}

?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>José Casanova | Datos Alumno</title>
  
</head>
<body>
	<h1>José Casanova | Tutorial 4</h1>
	<h2>Resultado alumno: <?php echo $nombre ?> </h2>	
	
	<p> Condición: <?php  verCondicionAlumno(  $tp1, $tp2  ) ?></p>
	
</body>
</html>



 
