<!DOCTYPE html>  
<?php
require_once 'productos.php';

?>

<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>Gracias por su compra</title>
  
</head>
<body>
	

<p> Gracias por su compra. El precio final es:  <?php  echo "$totalCompra"; ?>  </p>
	
	
<a href="index.php">volver a comprar</a>



</body>
</html>

<?php
session_destroy();  // elimina los datos guardados

?>