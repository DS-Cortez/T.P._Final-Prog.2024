<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Alumno</title>
    <link rel="stylesheet" href="modificar_examen.css">
</head>

<body>
    <?php // CONSULTAR FORM ACTION
        if (isset($_GET['mensaje'])) {
            echo '<div id="mensaje" class="alert alert-primary text-center">
                <p>'.$_GET['mensaje'].'</p></div>';
        }
    ?>

    <section id="modificarAlumno">
        <h2>Modificar los datos de un alumno</h2>
        <h2>Complete los siguientes campos:</h2>
        <div class="container">
            <form action="modificar_examen.php" method="post">
                <input type="text" id="nombre" name="nombre_alumno" placeholder="Nombre" required>
                <input type="text" id="apellido" name="apellido_alumno" placeholder="Apellido" required>
                <input type="number" id="dni" name="dni_alumno" placeholder="DNI" required>
                <input type="text" id="numero_legajo" name="legajo_alumno" placeholder="Numero de Legajo" required>
                <input type="date" id="email" name="email_alumno" required>
                <button type="submit">Modificar datos del alumno</button>
            </form>
        </div>
    </section>
</body>
</html>
