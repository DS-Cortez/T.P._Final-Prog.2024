<?php
class Usuario {

    private $id_usuario;
    private $usuario_empleado;
    private $clave_empleado;

    public function __construct($id_usuario, $usuario_empleado, $clave_empleado) {
        $this->id_usuario = $id_usuario;
        $this->usuario_empleado = $usuario_empleado;
        $this->clave_empleado = $clave_empleado;
    }

    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function getUsuarioEmpleado() {
        return $this->usuario_empleado;
    }

    public function getClave() {
        return $this->clave_empleado;
    }
}
