<?php
session_start();
$error = '';
$login = '';  
$enviado = false;
$usuarios = array (
	array( 'usuario' =>'jose' , 'rol' => 'admin' ),
	array( 'usuario' =>'juana' , 'rol' => 'usuario' )

);

if( isset ( $_POST['enviar'] ) ){
	$enviado = true;
	$login = $_POST['login'];
	foreach( $usuarios as $usuario ){
		if( $usuario['usuario'] == $login  ){
			$_SESSION['logueado'] = true;  
			$_SESSION['usuario'] = $usuario['usuario'];
			$_SESSION['rol'] = $usuario['rol'];		
			
		}
	}
	
	if( isset( $_SESSION['logueado'] )  ){
		
		if( $_SESSION['rol']  ==  'admin' ){
			header('Location: admin.php');
		}else if(  $_SESSION['rol'] == 'usuario' ){
			header('Location: usuario.php');		
		}
		
		
		
	}else{
		$error = ' Usuario inexistente ';
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
	<h1>José Casanova | Tutorial 8</h1>
	
	<p>Ingrese su nombre de usuario</p>
	
	<form action=""  method="post" >
		<input  type="text"    name="login" />
		<input  type="submit"  name="enviar" />
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
