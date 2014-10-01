<?php


    $conexion = mysqli_connect('localhost', 'jose', 'jose', 'curso') or die("error");
    $consulta = 'select * from alumnos where id = '.$_POST['id'];

    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_array($resultado);
    $datos = array( 
                    'id' => $fila['id'],
                    'nombre' => utf8_encode($fila['nombre'] ),
                    'apellido' => utf8_encode($fila['apellido']) ,
                    'genero' => $fila['sexo'] , 
                    'domicilio' =>  utf8_encode( $fila['domicilio'] ),
                    'telefono' => $fila['telefono'],
                    'imagen' => $fila['imagen'],
            
            
        );
    //while ($fila = mysqli_fetch_array($resultado)) {
     //   echo '<option value="' . $fila['id'] . '" >' . $fila['apellido'] . '</option> ';
    //}

    mysqli_close($conexion);
    echo json_encode($datos);
    