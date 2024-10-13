<?php

class Examen
{
    protected $materia;
    public $nota;
    protected $docente;
    protected $fecha;
    

    public function __construct($materia, $nota, $docente, $fecha)
    {
        $this->materia = $materia;
        $this->nota = $nota;
        $this->docente = $docente;
        $this->fecha = $fecha;
        
    }

    public function getMateria()
    {
        return $this->materia;
    }

    public function getNota()
    {
        return $this->nota;
    }

    public function getDocente()
    {
        return $this->docente;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

}
