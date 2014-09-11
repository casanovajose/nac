<!DOCTYPE html>
<html dir="ltr" lang="es">
    <head>
        <meta charset="utf-8">
        <title>Jquery: ejemplo 1</title>
        <link rel="stylesheet" type="text/css" href="css/estilo1.css"/>
        <script type="text/javascript" src="js/lib/jquery-1.5.2.min.js"></script>
        <script type="text/javascript" src="js/funciones3.js"></script>
        <script>
            $(document).ready(function() {
            $('form').change(
                    function() {
                    alert('hola');
                    }
            $.ajax({url:"ajax1Datos", success:function(){
            alert('hola');
            }});
                    );
                    );
            });

        </script>

    </head>
    <body>
        <article>
            <h1>Alumnos</h1>

            <section>
                <p>seleccione un alumno</p>
                <form>
                    <select name="alumno" >
                        <option selected="selected" value="0"></option>
<?php
$conexion = mysqli_connect('localhost', 'jose', 'jose', 'curso') or die("error");
$consulta = 'select id,nombre,apellido from alumnos';

$resultado = mysqli_query($conexion, $consulta);

while ($fila = mysqli_fetch_array($resultado)) {
    echo '<option value="' . $fila['id'] . '" >' . $fila['apellido'] . '</option> ';
}

mysqli_close($conexion);
?>
                    </select>

                </form>

            </section>

            <section>

            </section>

        </article>

    </body>
</html>
