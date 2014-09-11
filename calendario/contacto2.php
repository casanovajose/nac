<?php
    $nombre="";
	$telefono="";
	$mail="";
	$consulta="";	

	if ( isset($_POST["aceptar"])  ){		
		header("Location: index.php");
	
	}
	
	if ( isset($_POST["cancelar"])  ){
		header("Location: contacto.php");
	
	}
	
	if (isset($_POST["enviar"]))
		{
		$nombre  =$_POST["nombre"];
		$telefono  =$_POST["telefono"];
		$mail=$_POST["mail"];
		$consulta =$_POST["consulta"];
		
				
	}				
?>	
<!DOCTYPE html>

<html dir="ltr" lang="es">
	<head>
		<meta charset="utf-8">
		<title>confirmar datos</title>
		<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
	<body>	
		<?php require_once("encabezado.php");		
		?>
		<div id="contenido" >		
			<h2>Confirmar Datos</h2>	
			<p> Nombre :<?php echo "$nombre"; ?></p>
			<p> Telefono :<?php echo "$telefono"; ?></p>
			<p> e - mail :<?php echo "$mail"; ?></p>
			<p> Consulta :<?php echo "$consulta"; ?></p>
			
			<br/>
			
			<form action="contacto2.php" method="post">
				<input type="submit" value="Aceptar" name="aceptar" />
				<input type="submit" value="Cancelar" name="cancelar" />
			</form>
			
			
		</div>

		<?php 		
			require_once("pie.php");		
		?>		
	</body>
</html>
