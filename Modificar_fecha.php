<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Examen</title>
    <link rel="stylesheet" href="modificar_examen.css">
</head>

<body>
    <?php
        if (isset($_GET['mensaje'])) {
            echo '<div id="mensaje" class="alert alert-primary text-center">
                <p>'.$_GET['mensaje'].'</p></div>';
        }
    ?>

    <section id="modificarexamen">
        <h2>Modificar la fecha de un examen</h2>
        <h2>Complete los siguientes campos:</h2>
        <div class="container">
            <form action="modificar_examen.php" method="post">
                <input type="text" id="materia" name="materia_examen" placeholder="Materia" required>
                <input type="text" id="docente" name="docente_examen" placeholder="Docente" required>
                <input type="date" id="fecha" name="fecha_examen" required>
                <button type="submit">Modificar examen</button>
            </form>
        </div>
    </section>
</body>
</html>
