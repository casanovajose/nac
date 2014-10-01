<?php
$error = '';
if ($_FILES["archivo"]["error"] > 0) {
	$error  = $_FILES["archivo"]["error"];
} else {
		move_uploaded_file($_FILES["archivo"]["tmp_name"],
			"archivos/".$_FILES["archivo"]["name"]);		
}
?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>José Casanova</title>
  
</head>
	<body>
		<h1>José Casanova | Tutorial 9</h1>
	
		<h2>Archivos subidos</h2>
		
		<ul>
			<?php
				if($error == ''){
					$ficheros  = scandir('archivos');
				
					foreach($ficheros  as $archivo){
						echo "<li> $archivo </li>";
					}
				}else{
					echo "Ha ocurrido un error durante el proceso de carga: $error";
				}				
			?>
		</ul>		
	
	</body>
</html>






