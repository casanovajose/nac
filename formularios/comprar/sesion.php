<?php
 require_once 'productos.php';

 if(   isset( $_SESSION['totalCompra'])   ){
		
		$_SESSION['totalCompra'] =  $totalCompra + $_SESSION['totalCompra'];
		$totalCompra = $_SESSION['totalCompra'];
		
	}else{
		$_SESSION['totalCompra'] = 0;
	}

?>