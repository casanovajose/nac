<!DOCTYPE html>  

<?php
	
	$curso = array("Juan Pérez", 
				   "María González", 
				   "Ernesto Pérez", 
				   "José Casanova",
				   "Mariela López");
	
?>

<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>José Casanova</title>
  
</head>
<body>
	<h1>José Casanova | Tutorial 2</h1>
	
	<h2>Alumnos Inscriptos</h2>
	
	<ul>
		<?php
			foreach( $curso as $alumno ){
				echo '<li>';
				echo $alumno;
				echo '</li>';
			}
		?>
	</ul>
	
</body>
</html>


