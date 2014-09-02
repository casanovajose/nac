<!DOCTYPE html>  
<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>José Casanova</title>
  
</head>
<body>
	<h1>José Casanova | Tutorial 9</h1>
	
	<p>Seleccione un archivo para subir</p>
	
	<form action="subir.php" method="post" enctype="multipart/form-data">
	<label for="archivo" >Archivo</label>
	<input id="archivo" type="file" name="archivo"><br>
	<input type="submit" name="submit" value="Enviar">
	</form>
	
</body>
</html>