<!DOCTYPE html>
<?php
 $colores = array('rojo','azul','amarillo','verde');
?>
<html dir="ltr" lang="es">
    <head>
        <meta charset="utf-8">
        <title>Jquery: ejemplo 1</title>
        <link rel="stylesheet" type="text/css" href="css/estilo1.css"/>
        <script type="text/javascript" src="js/lib/jquery-1.5.2.min.js"></script>
         <script type="text/javascript" src="js/funciones1.js"></script>
       
    </head>
    <body>
        <?php
        for( $i = 0; $i <= 150 ; $i++ ){
           $color = $colores[rand(0,3)] ;
            echo '<div class="'.$color.'" ></div> ';
        }
        ?>
    </body>
</html>