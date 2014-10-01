<?php
include_once 'productos.php';

function calcularPrecio($precio, $cantidad){
	return $precio * $cantidad;
	
	
}


function agregarAlCarro($id){
	$_SESSION['carro'] [] = array('id'=>$id);
}



function miCarrito($lista_productos){
	
	if( !isset( $_SESSION['carro']) || count( $_SESSION['carro']) == 0 ){
		echo "<p> No hay ningún producto en el carrito </p>";
	}else{
		$total = 0;
		echo "<ul>";
		foreach ($_SESSION['carro'] as $producto) {
			$p = $lista_productos[ $producto['id']];
			$precio = $p['precio'] ;
			$total += $precio;
			echo "<li> $p[titulo] ,  $p[autor] / $ $precio  </li>";
		}
		echo "</ul>";	
		echo "<p>-------</p>
			<p>total $ $total</p>	
		";		
		echo "<a href=borrar.php>borrar carrito</a>";
		
		
		
	
	}
	
		 	
	
	
	
}

function comprar($carrito){
	
}



?>