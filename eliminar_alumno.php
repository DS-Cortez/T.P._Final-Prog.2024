<?php // CONSULTAR FORM ACTION
        if (isset($_GET['mensaje'])) {
            echo '<div id="mensaje" class="alert alert-primary text-center">
                <p>'.$_GET['mensaje'].'</p></div>';
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Alumno</title>
    <link rel="stylesheet" href="eliminar_alumno.css">
</head>
    <section id="eliminaralumno">
        <h2>Eliminar un alumno</h2>
        <h2>Complete los siguientes campos:</h2>
        <div class="container">
            <form action="eliminar_alumno.php" method="post">
                <input type="number" id="dni" name="dni_alumno" placeholder="DNI" required>
                <input type="text" id="numero_legajo" name="numero_legajo" placeholder="Numero de Legajo" required>
                <button type="submit">Eliminar alumno</button>
            </form>
        </div>
    </section>
</body>
</html>
