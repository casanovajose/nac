<?php


$diasAnteriores = array();  // son los dias que figuran en el calendario antes de 1 del mes actual


$calendario = array(

	" ",
	" ",
	" ",
	" ",
	" ",
	" ",
	" ",
	" ",
	" ",
	" ",
	
	" ",
	" ",
	" ",
	" ",
	" ",
	" ",
	" ",
	" ",
	" ",
	
	" ",
	" ",
	" ",
	" ",
	" ",
	" ",
	" ",
	" ",
	
	
	
); 


$columna = 0 ;  // contador de columna

?>


<table>
	<tr>
		<td>Domingo</td>
		<td>Lunes</td>
		<td>Martes</td>
		<td>Miercoles</td>
		<td>Jueves</td>
		<td>Viernes</td>
		<td>Sábado</td>
		
		
	</tr>
	
	
	<?php
		foreach( $calendario as $dia ){
			
			// si el dia es domingo  abrimos la etiqueta <tr> para la nueva fila	
			if($columna == 0){
				echo "<tr>";
			}
			
			// aqui imprimimos el dia que estamos leyendo del arreglo
			
			
			
			
			++$columna;
			// si el dia es sabado  cerramos la etiqueta <tr> y reseteamos el contador de columnas 
			if($columna == 0){
				echo "</tr>";
				$columna = 0;
			}
			
		}
	
	?>
	
	
</table>