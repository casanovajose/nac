<!DOCTYPE html>  
<?php
require_once 'productos.php';



if ( isset( $_POST['comprar'] )  ){
  //  echo "$_POST[comprar]   $_POST[cantidad]";
	
	 $totalCompra =  $_POST['precio'] * $_POST['cantidad'];	
		
	 //require_once 'sesion.php';
	
	
	
	//header('Location: gracias.php');	 
}


?>

<html dir="ltr" lang="es">
<head>
  <meta charset="utf-8">
  <title>Comprar</title>
  
</head>
<body>
 
 	<h1>  </h1>
 	<h2>  </h2>
 	
	<p id="fecha"> </p>
	
	<form method="post"  action="">
		<label>Productos</label>
		<select  name="precio" >
			<option selected="selected" >-------</option>
			<?php
				foreach ($productos as  $producto) {
					
					echo "<option  value=\"$producto[precio]\" > $producto[producto]  (\$ $producto[precio] )  </option>";
					
				}			
			?>
			
		</select>
		<br/>
		
		<label>Cantidad</label>
		<input name="cantidad"  type="text" />
		<br/>
		<input type="submit"   name="comprar"   value="Comprar"/>
		
	</form>


	<?php
	 if(  isset($totalCompra) ){
	 	echo "<p>Gracias por su Compra!!!</p>";
	 	echo "<p> Total a pagar :  \$ $totalCompra <p>";
	 }else{
	 	echo "<p> Seleccione un producto e ingrese la cantidad <p>";
		
	 }
	
	?>
    

</body>
</html>
