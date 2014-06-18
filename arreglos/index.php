<!DOCTYPE html>

<?php  

 $dias = array(31,28,31,30,31,30,31,31,30,31,30,31);


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
	
	
	}
	
	
	
	?> </p>

</body>
</html>