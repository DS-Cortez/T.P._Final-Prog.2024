<?php
require_once 'RepoExamen.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['materia_examen']) || empty($_POST['fecha_examen'])) {
        header("Location: eliminar_examen.php?mensaje=Por favor complete todos los campos");
        exit();
    }

    $materia = $_POST['materia'];
    $fecha = $_POST['fecha'];

    $cs = new RepoExamen();

     $resultado = $cs->eliminarExamen($materia, $fecha);

    
    if ($resultado) {
        $redirigir = "index.php?mensaje=Examen eliminado correctamente";
    } else {
        $redirigir = "index.php?mensaje=Error: No se pudo eliminar el examen";
    }

    header("Location: $redirigir");
    exit();
}
