<<<<<<< HEAD
<?php

require_once 'RepoExamen.php';

class ControlExamen
{
    public function crearExamen($materia, $nota, $docente, $fecha, $Materia_idMateria)
    {
        $repo = new RepoExamen();
        return $repo->crearExamen($materia, $nota, $docente, $fecha, $Materia_idMateria);
    }

    public function obtenerExamen($materia, $fecha)
    {
        $repo = new RepoExamen();
        return $repo->obtenerExamen($materia, $fecha);
    }

    public function eliminarExamen($materia, $fecha)
    {
        $repo = new RepoExamen();
        return $repo->eliminarExamen($materia, $fecha);
    }

    public function modificarExamen($materia, $nota, $docente, $fecha, $Materia_idMateria)
    {
        $repo = new RepoExamen();
        return $repo->modificarExamen($materia, $nota, $docente, $fecha, $Materia_idMateria);
    }
}
=======
<?php

require_once 'RepoExamen.php';

class ControlExamen
{
    public function crearExamen($materia, $nota, $docente, $fecha, $Materia_idMateria)
    {
        $repo = new RepoExamen();
        return $repo->crearExamen($materia, $nota, $docente, $fecha, $Materia_idMateria);
    }

    public function obtenerExamen($materia, $fecha)
    {
        $repo = new RepoExamen();
        return $repo->obtenerExamen($materia, $fecha);
    }

    public function eliminarExamen($materia, $fecha)
    {
        $repo = new RepoExamen();
        return $repo->eliminarExamen($materia, $fecha);
    }

    public function modificarExamen($materia, $nota, $docente, $fecha, $Materia_idMateria)
    {
        $repo = new RepoExamen();
        return $repo->modificarExamen($materia, $nota, $docente, $fecha, $Materia_idMateria);
    }
}
>>>>>>> bcaab2d1f066fbc0865572268d3a9f2c99268a19
