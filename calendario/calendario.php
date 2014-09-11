<?php
 date_default_timezone_set('America/Argentina/Tucuman');
 //definimos los valores iniciales para nuestro calendario 
 $mes = date("n"); 
 $anio = date("Y"); 
 $hoy = date("j"); 
 
 $contador = 1;
 $limite = 42;
 
 // Devuelve 0 para domingo, 6 para sabado 
 $primerDiaSemana= date("w",mktime(0,0,0,$mes,1,$anio))+ 1  ; 
 
  $ultimoDiaMes=date("d",(mktime(0,0,0,$mes+1,1,$anio)-1)); 
 
 $meses=array(1 =>"Enero", 
			  2 => "Febrero",
			  3 =>"Marzo",
			  4 => "Abril",
			  5 => "Mayo",
			  6 => "Junio",
			  7 => "Julio",
			  8 => "Agosto",
			  9 => "Septiembre",
			  10 => "Octubre",
			  11 =>"Noviembre",
			  12 =>"Diciembre"); 
 

 
 
 ?> 
 
 <html dir="ltr" lang="es">
	<head>
		<meta charset="utf-8">
		<title>Calendario</title>
		<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
	<body>
		<?php 
		require_once("encabezado.php");
		?>
		<div  id="contenido">
		
		<h2>Calendario</h2>
	    <br/>
		<table   id="calendario"  >
			<caption><?php echo $meses[$mes ]." ".$anio?></caption> 
			<tr> 
				<th>Domingo</th>
				<th>Lunes</th>
				<th>Martes</th>
				<th>Miércoles</th> 
				<th>Jueves</th>
				<th>Viernes</th>
				<th>Sábado</th>				
			</tr> 
			
			<tr>
			<?php
				$ultimaCelda = $primerDiaSemana + $ultimoDiaMes;
			
				while ( $contador <=   $limite) {
					
					
					if($contador == $primerDiaSemana) {
							// determinamos en que dia empieza 
							$numeroDeDia = 1; 
						} 
					
					
					if( $contador < $primerDiaSemana || $contador >= $ultimaCelda) { 
						// celca vacia 
							echo "<td> </td>"; 
					}else{ 
						// mostramos el dia 
			     			if( $numeroDeDia==$hoy) 
								echo "<td class='hoy'>$numeroDeDia</td>";
							else 
								echo "<td>$numeroDeDia</td>"; $numeroDeDia++; 
							} 
							// cuando llega al final de la semana, iniciamos una columna nueva 
							if( $contador %7==0) { 
								echo "</tr><tr>\n"; 
							} 
					
					$contador ++;
				}
				
			?>
			
		</table>
		</div>
		
		
		<?php 
		require_once("pie.php");
		?>
	</body>
 </html>
 
 
 