<?php
$errores = array();

if (isset($_POST['enviar'])) {


    $fecha = explode('/', $_POST['fecha']);

    if (count($fecha) != 3 || !checkdate($fecha[1], $fecha[0], $fecha[2])) {

        $errores[] = 'La fecha ingresada no es válida';
    } else {
        $f = $fecha[1] . '/' . $fecha[0] . '/' . $fecha[2];
        $futuro = date('d/m/Y', strtotime($f . ' +2 month'));
        $pasado = date('d/m/Y', strtotime($f . ' +15 days'));
    }
}
?>
<!DOCTYPE html>  
<html dir="ltr" lang="es">
    <head>
        <meta charset="utf-8">

        <title>1-1-2</title>

    </head>
    <body>
        <h1>1-1-2</h1>

        <form method="post">
            Fecha (dd/mm/aaaa): <input type="text" name="fecha" /><br>

            <input type="submit" name="enviar" /><br>

        </form>

        <?php
        if (isset($_POST['enviar'])) {
            echo "<p>Fecha $_POST[fecha] 2 meses a futuro: $futuro</p>";
            echo "<p>Fecha $_POST[fecha] 15 dias en el pasado: $pasado</p>";
        }

        foreach ($errores as $e) {
            echo "<p>$e </p>";
        }
        ?>


    </body>
</html>


