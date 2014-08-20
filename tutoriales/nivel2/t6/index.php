<?php
// inicializamos las variables para evitar warnings
	$totalAPagar = "";
	$descuento = "";
	// Arreglo para guardar los errores al validar
	$errores = array();
	// varificar envio post
	$enviado = false;
	// valor con el descuento aplicado
	$totalConDescuento = 0; 

	
//capturamos los valores del formulario
	//verificamos envío vía post
	if(  isset( $_POST['enviar'] )   ){
		$enviado = true;	

	
	//VALIDACION
		//¿ $totalAPagar es un numero?
		if( is_numeric($_POST['totalAPagar']) ){
			//cargamos los valores provenientes del formulario	
			$totalAPagar = $_POST['totalAPagar'];	
		
		}else{
			// si no es numerico anotamos un error
			$errores[] = 'El importe debe ser un número';
		}
	
	
		//¿ $descuento es un numero?
		if( is_numeric($_POST['descuento'])  &&  $_POST['descuento'] <= 50 ){
			//cargamos los valores provenientes del formulario	
			$descuento = $_POST['descuento'];	
		
		}else{
			// si no es numerico anotamos un error
			$errores[] = 'El valor de descuento debe ser un número 
						y no puede superar el 50%';
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
	<h1>José Casanova | Tutorial 6</h1>
	
	<h2> Validando formularios I</h2>
	
	<form method="post"  action="" >
		<label for="totalAPagar" >Total a pagar</label>
		<input id="totalAPagar" type="text" name="totalAPagar" />
		<br/><br/>
		<label for="descuento" >Descuento</label>
		<input id="descuento" type="text" name="descuento" />
		<br/><br/>
		<input type="submit"  name="enviar"/>
	</form>
	
	<?php
	if( $enviado ){
		// si existe al menos un error muestra los errores
		if(  count( $errores ) > 0 ){
		
			foreach($errores as $error){
				echo "<p>  $error</p>";
			}	
		
		}else{ // si no hay errores que muestre el 
			  //precio del producto con descuento			  
			  echo "<p> Total (sin descuento): \$ $totalAPagar </p>";
			  echo "<p> % descuento:  $descuento % </p>";
			
			// calculamos el precio con descuento
			  $totalConDescuento = $totalAPagar - ($descuento *  $totalAPagar )/100;
			  echo "<p> El total a pagar es: \$ $totalConDescuento</p>";		  
		
		}
	
	}else{ // si no se ha clickeado en enviar	
		echo '<p> Ingrese el precio y el descuento</p>';	
	}
	?>
	
</body>
</html>