<<<<<<< HEAD
<?php
require_once 'ControlExamen.php';

$control = new ControlExamen();
$materia = $_POST['materia_examen'];
$nota = $_POST['nota_examen'];
$docente = $_POST['docente_examen'];
$fecha = $_POST['fecha_examen'];


$resultado = $control->crearExamen($materia, $nota, $docente, $fecha, $Materia_idMateria);

if ($resultado) {
    echo "Examen creado exitosamente";
} else {
    echo "Error al crear el examen";
}
=======
<?php
require_once 'ControlExamen.php';

$control = new ControlExamen();
$materia = $_POST['materia_examen'];
$nota = $_POST['nota_examen'];
$docente = $_POST['docente_examen'];
$fecha = $_POST['fecha_examen'];


$resultado = $control->crearExamen($materia, $nota, $docente, $fecha, $Materia_idMateria);

if ($resultado) {
    echo "Examen creado exitosamente";
} else {
    echo "Error al crear el examen";
}
>>>>>>> bcaab2d1f066fbc0865572268d3a9f2c99268a19
