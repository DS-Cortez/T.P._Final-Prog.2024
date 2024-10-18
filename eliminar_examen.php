<?php
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
    <title>Eliminar Examen</title>
    <link rel="stylesheet" href="eliminar_examen.css">
</head>
    <section id="eliminarexamen">
        <h2>Eliminar un examen</h2>
        <h2>Complete los siguientes campos:</h2>
        <div class="container">
            <form action="eliminar_examen.php" method="post">
                <input type="text" id="materia" name="materia_examen" placeholder="Materia" required>
                <input type="date" id="fecha" name="fecha_examen" required>
                <button type="submit">Eliminar examen</button>
            </form>
        </div>
    </section>
</body>
</html>
