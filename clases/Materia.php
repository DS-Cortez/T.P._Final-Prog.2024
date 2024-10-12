<?php
class Materias {
    private $id_materia;
    private $nombre;
    private $descripcion;

    public function __construct($id_materia, $nombre, $descripcion) 
    {
        $this->id_materia = $id_materia;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    public function getIdMateria() {
        return $this->id_materia;
    }

    public function getNombreMateria() {
        return $this->nombre;
    }

    public function getDescripcionMateria() {
        return $this->descripcion;
    }
}