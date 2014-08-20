<?php
$palabra = "";
$enviado = false;

if( isset($_POST["enviar"]) ) {
    $palabra = $_POST["palabra"];
	$palabra =  trim ( $palabra );
	$enviado = true;	//verdadero
}

?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>José Casanova</title>
  
</head>
<body>
	<h1>José Casanova | Tutorial 5</h1>
	
	<h2> Validando formularios </h2>
	
	<form method="post"  action="" >
		<input type="text" name="palabra" />
		<input type="submit"  name="enviar"/>
	<form>
	
	<p>  
		<?php
			if( empty( $palabra )  && $enviado == true ){
				echo "No ha ingresado ninguna palabra";
			}else{
				echo $palabra;
			}
		?>
	</p>
	
	
</body>
</html>
