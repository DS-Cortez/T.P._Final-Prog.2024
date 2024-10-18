<?php
require_once 'RepoExamen.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (empty($_POST['materia']) || empty($_POST['fecha'])) {
        header("Location: Modificar_fecha.php?mensaje=Por favor complete todos los campos");
        exit();
    }

    $materia = $_POST['materia_examen'];
    $nueva_fecha = $_POST['fecha_examen'];

    
    $repoExamen = new RepoExamen();

    
    $examen = $repoExamen->obtenerExamen($materia, $fecha);
    if ($examen) {
        
        $resultado = $repoExamen->modificarExamen($materia, $fecha);

        if ($resultado) {
            $redirigir = "index.php?mensaje=Fecha del examen modificada correctamente";
        } else {
            $redirigir = "ModificarFecha.php?mensaje=Error: No se pudo modificar la fecha";
        }
    } else {
        $redirigir = "index.php?mensaje=Error: No se encontró el examen";
    }

    header("Location: $redirigir");
    exit();
}

