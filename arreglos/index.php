<!DOCTYPE html>

<?php  

 $dias = array(31,28,31,30,31,30,31,31,30,31,30,31);

 $atletico = array(   "nombre" => "Atletico de Tucumán" , "puntos" => 34   );

 $torneo = array(
 		array(   "nombre" => "Atletico de Tucumán" , "puntos" => 34   ),
 		array(   "nombre" => "Independiente" , "puntos" => 29   ),
		array(   "nombre" => "Instituto" , "puntos" => 25   ) 
 );

?>

<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title></title>
  
</head>
<body>

<p> <?php   
	foreach( $dias as $d  ){
		echo " $d ";
	}?> </p>

<br/>


<p> <?php echo  $atletico['nombre'] .'  tiene  '.$atletico['puntos'].' puntos';  ?> </p>


<ol> <?php

     foreach($torneo as $equipo){
     	echo  '<li>  '.$equipo['nombre'].' | puntos: '.$equipo['puntos'];
     }

  ?> </ol>


</body>
</html>