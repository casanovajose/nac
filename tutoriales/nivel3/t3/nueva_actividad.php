<!DOCTYPE html>  
<html dir="ltr" lang="es">
    <head>
        <meta charset="utf-8">
        <?php
            require_once('recursos.php');
        ?>
        <title>NACtilus | Nueva Actividad</title>
        
    </head>
    <body>
        <?php
            require_once('encabezado.php');
        ?>
        <article>
            <h2>Nueva Actividad</h2> 
            
            <?php
            require_once('menu_actividades.php');
            ?>
       
            <form id="nueva_actividad" action="procesar_nueva_actividad.php"  method="post">
                <label for="nombre_actividad" >Nombre:</label>                    
                <input id="nombre_actividad" name="nombre" /> <br/>                
                              
                <label for="inicio_actividad" >Fecha de inicio:</label>                    
                <input id="inicio_actividad" class="fecha" name="inicio" />   <br/>              
                
                <label for="fin_actividad" >Fecha de finalización:</label>                    
                <input id="fin_actividad"  class="fecha" name="fin" /> <br/>
                                
                <label for="descripcion_actividad" >Descripción:</label>                    
                <textarea id="descripcion_actividad" name="descripcion" > </textarea>                
                <br/>  
                
                <input type="submit" value="Crear actividad" name="crear_actividad" >
                
            </form>
            
        </article>
        <?php
            require_once('pie.php');
        ?>
    </body>
</html>





