<?php
require_once 'RepoUsuario.php';
require_once 'Usuario.php';

class ControlSesion
{
    public function login($usuario_empleado, $clave)
    {
        $repo = new RepoUsuario();
        $usuario = $repo->login($usuario_empleado, $clave);

        if ($usuario === false) {
            throw new Exception("Credenciales incorrectas");
        }

        session_start();
        $_SESSION['usuario'] = serialize($usuario);
        return [true, "Usuario cargado correctamente"];
    }

    
    public function create($id_usuario, $usuario_empleado, $clave_empleado)
    {
        $repo = new RepoUsuario();
        $usuario = new Usuario($id_usuario, $usuario_empleado, $clave_empleado);

        $id_usuario = $usuario->getUsuarioEmpleado();
        $usuario_empleado = $usuario->getUsuarioEmpleado();
        $clave_empleado = $usuario->getClave();
   
        session_start();
        $_SESSION['usuario'] = serialize($usuario);
        return [true, "Usuario creado exitosamente"];
    }

public function modificar(string $usuario_empleado, string $clave_empleado)
{
    if (isset($_SESSION['usuario'])) {
        $usuario = unserialize($_SESSION['usuario']);
    } else {
        return false;  
    }

    $repo = new RepoUsuario();

    if ($repo->modificar($usuario_empleado, $clave_empleado, $usuario)) {
        $usuario->setDatos($usuario_empleado, $clave_empleado);
        $_SESSION['usuario'] = serialize($usuario);

        return true;
    } else {
        return false;
    }
}
}
