<?php
$conexion = mysqli_connect('localhost', 'root', '', 'nactilus');
$consulta = 'select * from actividades order by activa, fecha_inicio';
$actividades = mysqli_query($conexion ,$consulta);
mysqli_close($conexion);
?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
    <head>
        <meta charset="utf-8">
        <?php
            require_once('recursos.php');
        ?>
        <title>NACtilus | Actividades</title>
        
    </head>
    <body>
        <?php
            require_once('encabezado.php');
        ?>
        <article>
            <h2>Actividades</h2>
            
           <?php
            require_once('menu_actividades.php');
           ?>        
            
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha inicio</th>
                    <th>Fecha fin</th>
                    <th>Activa</th>
                </tr>    
                
                <?php while($fila =  mysqli_fetch_array($actividades) ){ ?>
                <tr>
                     <td> <?php echo $fila['nombre']; ?></td>
                     <td>
                         <?php echo date("d/m/Y", strtotime($fila['fecha_inicio'])); ?>
                     </td>
                     <td> <?php 
                                if($fila['fecha_fin'] != null){
                                     echo date("d/m/Y", strtotime($fila['fecha_fin'])); 
                                }                              
                         ?>
                    </td>
                    <td> <?php if( $fila['activa']){
                                    echo 'SI';
                                }else{
                                    echo 'NO';
                                }                     
                          ?>
                    </td>
                </tr>    
                <?php } ?>
            </table>    
        </article>
        <?php
            require_once('pie.php');
        ?>
    </body>
</html>









