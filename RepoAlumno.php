<?php

require_once 'conexion.php';  
require_once 'Alumno.php';

class RepoAlumno
{
    private static $conexion = null;

    public function __construct()
    {
        $credenciales = credenciales();
        if (is_null(self::$conexion)) {
            self::$conexion = new mysqli(
                $credenciales['servidor'],
                $credenciales['usuario'],
                $credenciales['clave'],
                $credenciales['base_de_datos']
            );
        }
        if (self::$conexion->connect_error) {
            die('Error de conexión: ' . self::$conexion->connect_error);
        }
        self::$conexion->set_charset('utf8mb4');
    }

    public function crearAlumno($nombre, $apellido, $dni, $numero_legajo, $email)
    {
        $q = "INSERT INTO alumno (nombre, apellido, dni, numero_legajo, email) VALUES (?, ?, ?, ?, ?)";
        $query = self::$conexion->prepare($q);
        $query->bind_param("ssiss", $nombre, $apellido, $dni, $numero_legajo, $email);

        return $query->execute();
    }

    public function obtenerAlumno($dni, $numero_legajo)
    {
        $q = "SELECT * FROM alumno WHERE dni =? numero_legajo = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("is", $dni, $numero_legajo); /*duda sobre el tipo de balor*/
        $query->execute();
        return $query->get_result()->fetch_assoc();
    }

    public function eliminarAlumno($dni, $numero_legajo)
    {
        $q = "DELETE FROM alumno WHERE dni = ? AND numero_legajo = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("is",$dni, $numero_legajo);
        return $query->execute();
    }

    public function modificarAlumno($nombre, $apellido, $dni, $numero_legajo, $email)
    {
        $q = "UPDATE alumno SET nombre = ?, apellido = ?, dni = ?, email = ? WHERE numero_legajo = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("ssiss", $nombre, $apellido, $dni, $email, $numero_legajo);
        return $query->execute();
    }
}
