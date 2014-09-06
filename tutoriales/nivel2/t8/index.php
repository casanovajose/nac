<?php
session_start();
$error = ''; // mensaje de error
$login = '';  // nombre de usuario que viene del form
$enviado = false;
$usuarios = array (
	array( 'usuario' =>'jose' , 'rol' => 'admin' ),
	array( 'usuario' =>'juana' , 'rol' => 'usuario' )
);

if( isset ( $_POST['enviar'] ) ){
	$enviado = true;
	$login = $_POST['login'];

	foreach( $usuarios as $u ){
		if( $u['usuario'] == $login  ){
			
		}
	}
	
	if( isset( $_SESSION['logueado'] ) == false  ) {
		$error = ' Usuario inexistente ';
	}
	
} // fin del la prueba de envio

if( isset( $_SESSION['logueado'] )  ){
		if( $_SESSION['rol']  ==  'admin' ){
			header('Location: admin.php');
		}else if(  $_SESSION['rol'] == 'usuario' ){
			header('Location: usuario.php');		
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
	<h1>José Casanova | Tutorial 8 | Manejo de sesiones</h1>
	
	<p>Ingrese su nombre de usuario</p>
		
	<form action=""  method="post" >
		<label for="nombre_usuario" >Nombre de usuario </label>
		<input  type="text"    name="login"  id="nombre_usuario" />
		<br/>
		<input  type="submit"  name="enviar" value="iniciar sesión"/>
	</form>	
		
	<p>		
		<?php
			if( $enviado ){
		
				if( $error != '' ){
					echo $error;
				}
		
			} 
		?>
	</p>
	
</body>
</html>






