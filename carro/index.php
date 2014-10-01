<?php
session_start();
require_once('funciones.php');

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
				<h2>compra online</h2>
				<ul>
									
					<?php
					 foreach( $productos as $p ){
						echo  "<li><i> $p[titulo] </i>, $p[autor], \$ $p[precio] <a href=\"agregar.php?id=$p[id]\" class=\"agregar\">agregar al carrito </a> </li>";
					 }
					?>
					
				</ul>
			
		</section>
		
		<section>
			<h2>Carrito</h2>
			<?php miCarrito($productos);?>
			
		</section>
	</article>
</body>
</html>