<?php
class Docentes{
    private $id_docente;
    private $num_matricula;
    private $nombre;
    private $apellido;
    private $cargo_materia;

    public function __construct($id_docente, $num_matricula, $nombre, $apellido, $cargo_materia) {
        $this->id_docente = $id_docente;
        $this->num_matricula = $num_matricula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cargo_materia = $cargo_materia;
    }

    public function getIdDocente() {
        return $this->id_docente;
    }

    public function getNumMatricula() {
        return $this->num_matricula;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getCargoMateria() {
        return $this->cargo_materia;
    }


}