
<?php

require_once 'conexion.php';  
require_once 'Examen.php';

class RepoExamen
{
    public static $conexion = null;

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

    public function crearExamen($materia, $nota, $docente, $fecha)
    {
        $q = "INSERT INTO examen (materia, nota, docente, fecha, Materia_idMateria) VALUES (?, ?, ?, ?)";
        $query = self::$conexion->prepare($q);
        $query->bind_param("sisss", $materia, $nota, $docente, $fecha);

        return $query->execute();
    }

    public function obtenerExamen($materia, $fecha)
    {
        $q = "SELECT * FROM examen WHERE materia = ? AND fecha = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("ss", $materia, $fecha);
        $query->execute();
        return $query->get_result()->fetch_assoc();
    }

    public function eliminarExamen($materia, $fecha)
    {
        $q = "DELETE FROM examen WHERE materia = ? AND fecha = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("ss", $materia, $fecha);
        return $query->execute();
    }

    public function modificarExamen($materia, $fecha)
    {
        $q = "UPDATE examen SET fecha = ? WHERE materia = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("ss", $fecha, $materia);
        return $query->execute();
    }
}
