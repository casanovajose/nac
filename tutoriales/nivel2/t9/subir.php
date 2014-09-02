<?php
if ($_FILES["archivo"]["error"] > 0) {
	echo "Error: " . $_FILES["archivo"]["error"] . "<br>";
} else {
		//echo "Subido: " . $_FILES["archivo"]["name"] . "<br>";
		//echo "Tipo: " . $_FILES["archivo"]["type"] . "<br>";
		//echo "Tamano: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
		//echo "Almacenado temporalmente en: " . $_FILES["archivo"]["tmp_name"];
		move_uploaded_file($_FILES["archivo"]["tmp_name"], "uploads/".$_FILES["archivo"]["name"]);
		//echo "<br>El archivo ya está guardado en la carpeta uploads";
}



$directorio = opendir("uploads"); //ruta actual
$archivos = array();
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
       $archivos [] = "[".$archivo . "]"; //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
      $archivos [] = $archivo;
    }
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
				$ficheros1  = scandir('uploads');
			
				foreach($ficheros1  as $archivo){
					echo "<li> $archivo </li>";
				}
			?>
		</ul>
	
	
	</body>
</html>
