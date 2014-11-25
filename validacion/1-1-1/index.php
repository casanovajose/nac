<?php

$errores = array();

if( isset( $_POST['enviar'] ) ){
    
    if( strlen( $_POST['nombre'] ) > 50  ){
        $errores[] = 'El nombre debe contener menos de 50 caracteres' ;
    }
    if( strlen( $_POST['apellido'] ) > 50  ){
        $errores[] = 'El apellido debe contener menos de 50 caracteres' ;
    }
    
    if(substr( $_POST['correo'] , -4) != '.com' ){
         $errores[] = 'El correo debe contener .com' ;
    }
   
    if(  strpos( $_POST['correo'], '@') == false ){
         $errores[] = 'El correo debe contener una @' ;
    }
    
    
    $fecha = explode('/', $_POST['nacimiento']);
    
    if( count($fecha) != 3  || !checkdate($fecha[1], $fecha[0], $fecha[2])  ){
        
             $errores[] = 'La fecha ingresada no es válida';    
       
        
    }
    
    
    
    
    if(  $_POST['importe']  > 100000 ||  $_POST['importe'] <1000 ){
        $errores[] = 'El importe debe ser mayor a 1000 y menor a 100000' ;
    }
}

?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
    <head>
        <meta charset="utf-8">
 
        <title>1-1-1</title>
        
    </head>
    <body>
        <h1>1-1-1</h1>
        
        <form method="post">
            Nombre (max. 50 caracteres): <input type="text" name="nombre" /><br>
            Apellido (max. 50 caracteres): <input type="text" name="apellido" /><br>
            Correo: <input type="text" name="correo" /><br>
            Fecha de nacimiento (dd/mm/aaaa): <input type="text" name="nacimiento" /><br>
            Importe ( entre 1000 y 100000)<input type="text" name="importe" /><br>
            <input type="submit" name="enviar" /><br>
          
        </form>
        
        <?php
        foreach ($errores as $e){
            echo "<p>$e </p>";
        }
        ?>
        
        
    </body>
</html>


