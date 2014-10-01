<!DOCTYPE html>
<html dir="ltr" lang="es">
    <head>
        <meta charset="utf-8">
        <title>AJAX ejemplo</title>
        <link rel="stylesheet" type="text/css" href="css/estilo1.css"/>
        <script type="text/javascript" src="js/lib/jquery-1.5.2.min.js"></script>
        <script type="text/javascript" src="js/funciones3.js"></script>
        <script>
            function verDatosAlumno(id) {
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "ajax1Datos.php",
                    data: "id=" + id,
                    success: function(data) {
                       // console.log('nombre ' + data.nombre);
                        $('#datos_alumno tr').remove();
                        if (data.id != null ) {
                            $('#datos_alumno').append(
                                    '<table>' +
                                    '<tr><td>Nombre</td><td>' + data.nombre + '</td></tr>' +
                                    '<tr><td>Apellido</td><td>' + data.apellido + '</td></tr>' +
                                    '<tr><td>Genero</td><td>' + data.genero + '</td></tr>' +
                                    '<tr><td>Dirección</td><td>' + data.domicilio + '</td></tr>' +
                                    '<tr><td>Telefono</td><td>' + data.telefono + '</td></tr>' +
                                    '<tr><td>Foto</td><td><img alt="foto del alumn@" src="img/' + data.imagen + '" /></td></tr>' +
                                    '</table>'

                                    )
                        }


                    }

                });
            }

            $(document).ready(function() {
                $('form select').change(
                        function() {
                            // alert('hola'+ $(this).val()  );

                            verDatosAlumno($(this).val());

                        }

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

            <section id="datos_alumno">

            </section>

        </article>

    </body>
</html>
