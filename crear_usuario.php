<?php
require_once 'ControlSesion.php';

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    
    $id_usuario = filter_input(INPUT_POST, 'usuario'); 
    $clave = $_POST['clave']; 

    if (empty($id_usuario) || empty($clave)) {
        $redirigir = 'cargar_usuario.php?mensaje=Todos los campos son obligatorios';
    } else {
        $cs = new ControlSesion();
        
        
        $result = $cs->create($id_usuario, $usuario_empleado, $clave_empleado); 
       
        $message = isset($result[1]) ? $result[1] : 'Ocurrió un error inesperado';
        if ($result[0] === true) {
            $redirigir = 'index.php?mensaje=' . urlencode($message);
        } else {
            $redirigir = 'cargar_usuario.php?mensaje=' . urlencode($message);
        }
    }
} else {
    $redirigir = 'cargar_usuario.php?mensaje=Hay que elegir usuario y clave';
}

header('Location:' . $redirigir);
exit; 
