<?php
session_start();
include_once 'productos.php';
include_once 'funciones.php';
$id = $_GET['id'];
$precio = $productos[$id]['precio'] ;
$titulo = $productos[$id]['titulo'] ;


// compruebo si esta definido cantidad y si hay stock disponible del producto

$cantidad = '';

if(isset ($_GET['cantidad'])){
	$cantidad = $_GET['cantidad'];	
}else{
	$cantidad = 1;	
	//echo $cantidad." es la cant";
}


if( isset($_POST['agregar']) ){
	$_SESSION['carro'][] = array('id' => $id,'titulo' =>$titulo);
	header('Location: index.php');
}



?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>carro de compras</title>
  
</head>
<body>
	<header>
		<h1>Libreria Helios</h1>
	</header>
	<article>
		<section>
			<p>volver al <a href="index.php">e-shop</a></p>
			

			<p> Desea agregar el producto <i><?php echo $titulo ; ?></i> </p>

			<form method="post" action="".php">
	
				<input type="hidden" name="id_producto" value="<?php echo $id; ?>" />	
				<input name="agregar" type="submit"  value="agregar al carro" />
				<input name="comprar" type="submit" value="efectuar comprar" />
		
			</form>
		</section>
		<section>
			<h2>Carrito</h2>
			<?php miCarrito($productos); ?>
		</section>
	
	</article>
</body>
</html>


							


