<?php


    $conexion = mysqli_connect('localhost', 'jose', 'jose', 'curso') or die("error");
    $consulta = 'select id,nombre,apellido from alumnos';

    $resultado = mysqli_query($conexion, $consulta);

    while ($fila = mysqli_fetch_array($resultado)) {
        echo '<option value="' . $fila['id'] . '" >' . $fila['apellido'] . '</option> ';
    }

    mysqli_close($conexion);

    