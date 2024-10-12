<!doctype html>
<html lang="en">

<head>
    <title>Sistema</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <main class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Sistema</h1>
            <p class="lead">Gestiona Usuarios, Materias, Notas y Exámenes</p>
        </div>

        <div class="row mt-4">
            <div class="col-md-3">
                <a href="cargar_usuario.php" class="btn btn-primary w-100 mb-2">Cargar Usuario</a>
            </div>
            <div class="col-md-3">
                <a href="cargar_materia.html" class="btn btn-primary w-100 mb-2">Cargar Materia</a>
            </div>
            <div class="col-md-3">
                <a href="cargar_examen.php" class="btn btn-primary w-100 mb-2">Cargar Examen</a>
                <!-- Botones para Examen -->
                <a href="eliminar_examen.php" class="btn btn-danger w-100 mt-2">Dar de Baja Examen</a>
                <a href="Modificar_fecha.php" class="btn btn-success w-100 mt-2">Modificar Fecha de Examen</a>
            </div>
            <div class="col-md-3">
                <a href="alumno.html" class="btn btn-primary w-100 mb-2">Alumno</a>
                <!-- Botones para Alumno -->
                <a href="eliminar_alumno.html" class="btn btn-danger w-100 mt-2">Eliminar Alumno</a>
                <a href="modificar_datos_alumno.html" class="btn btn-success w-100 mt-2">Modificar Datos Alumno</a>
            </div>
        </div>

    </main>

    <!-- Botón de Logout en el margen inferior derecho -->
    <div class="position-fixed bottom-0 end-0 p-3">
        <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>

</body>

</html>
