<?php

require_once 'ControlSesion.php';
require_once 'Usuario.php';
session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = unserialize ($_SESSION['usuario']);
} else {
    header('Location: index.php');
}

if (
    empty($_POST['id_usuario'])
    || empty($_POST['nombre'])
    || empty($_POST['apellido'])
) {
    $mensaje = "Completar todos los campos.";
    header("Location:modificar_datos.php?mensaje=$mensaje");
    die();
}

$usuario_empleado = $_POST['id_usuario'];
$nombre_persona = $_POST['nombre'];
$apellido_persona = $_POST['apellido'];

echo "Valores de las variables:";
echo "id_usuario: " . $id_usuario . "<br>";
echo "nombre:" . $nombre . "<br>";
echo "apellido: " . $apellido . "<br>";

$cs = new ControlSesion();

$resultado = $cs->modificar($id_usuario, $nombre, $apellido, $clave);

if ($resultado) {
    $redirigir = "index.html?mensaje=Datos actualizados correctamente";
} else {
    $redirigir = "modificar_datos.php?mensaje=Error al actualizar datos";
}
header("Location: $redirigir");
