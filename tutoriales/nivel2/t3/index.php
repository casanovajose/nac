<!DOCTYPE html>  

<?php
	
	function listarCurso( $curso ){
			echo '<ul>'; // abrimos la lista
			
			//  usamos el ciclo para mostra a cada alumno
			// en un <li>
			
			foreach( $curso as $alumno ){
				echo '<li>';
				echo $alumno;
				echo '</li>';
			}			
			echo '</ul>'; // cerramos la lista
	
	
	}
	
	$curso1 = array("Juan Pérez", 
				   "María González", 
				   "Ernesto Pérez", 
				   "José Casanova",
				   "Mariela López");
	
    $curso2 = array( 
						"Claudia Guzman",
						"Enzo Francescoli",
						"Maria Rodriguez"
						
	);
	
	$curso3 = array(
					"Sergio Gordín",
	);
	
	$curso4 = array(
					"Rafael Lozano",
					"Alan Kurtz",
					
	);
	
	$curso5 = array(
					"Susana Prieto",
					"juliana Martinez",
					"Juana Luna",
					"Florencia Ramirez"
	);	
?>

<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>José Casanova</title>
  
</head>
<body>
	<h1>José Casanova | Tutorial 3</h1>
	
	<h2>Alumnos Inscriptos en Desarrollo Web</h2>
	<?php  listarCurso( $curso1 ); ?>
	
	<h2>Alumnos Inscriptos en Animación</h2>
	<?php  listarCurso( $curso2 );  ?>
	
	<h2>Alumnos Inscriptos en Periodismo</h2>
	<?php  listarCurso( $curso3 );  ?>
	
	<h2>Alumnos Inscriptos en Testing</h2>
	<?php listarCurso( $curso4 );  ?>
	
	<h2>Alumnos Inscriptos en Fotografía Digital</h2>
	<?php  listarCurso( $curso5 );  ?>
	
</body>
</html>

