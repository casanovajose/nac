<?php
	$consulta = '';
	$error = ''; //mensaje de error
	$enviado = false;
	
	if(  isset( $_POST['enviar'] )  ){
		$enviado = true;
		$consulta = $_POST['consulta'];
		
		$largo = strlen(   trim( $consulta)    );
		
		if( $largo <= 50 || $largo >=  160  ){
			$error = ' Su consulta no debe contener
				menos de 50 caracteres ni más de 160.' ;
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
	<h1>José Casanova | Tutorial 7</h1>
	
	<p>Escriba su consulta para ser evaluada por el equipo técnico</p>
	
	<form action=""  method="post" >
		<textarea name="consulta">		
		</textarea>
		<input  type="submit"  name="enviar" />
	</form>
	
	<p>	
		<?php
			if( $enviado ){
				if( $error != '' ){
					echo $error;
				}else {
					echo "Muchas Gracias, en la brevedad nos 
					comunicaremos con usted.<br><br> <i>$consulta<i> ";
				}
			}
		?>
	</p>
	
</body>
</html>