<?php	
	if(  isset( $_GET['enviar'] )  ){
			
			$palabra = $_GET['palabra'];
			
			echo " La palabra escrita en el formulario es $palabra ";
	
	} else {
		echo "No se ha clickeado en enviar";	
	}
?>



