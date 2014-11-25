<?php

$nombre = '';
$fechaInicio = '';
$fechaFin = '';
$descripcion = '';

if( isset( $_POST['crear_actividad'] )   ){
  
    $nombre = trim($_POST['nombre']);
    $fechaInicio =  date("Y-m-d", strtotime( $_POST['inicio']) );
    $fechaFin = date("Y-m-d", strtotime( $_POST['fin']) );
    $descripcion = trim($_POST['descripcion']);
    
    $consulta = "INSERT INTO actividades (nombre, fecha_inicio, fecha_fin, descripcion, activa) 
              VALUES ( '$nombre','$fechaInicio','$fechaFin','$descripcion' ,1) ";
    
    $conexion = mysqli_connect('localhost', 'root', '', 'nactilus');
    $resultado = mysqli_query($conexion ,$consulta);    
    mysqli_close($conexion);
    
    header('Location: actividades.php');    
    
    
}else{
    header('Location: index.php');
}








    
   
