<?php

namespace App\Models\Tarea15;

use App\Models\Tarea\{Alumno, Docente};

abstract class Persona
{
    private String $nombres;

    private String $apellidos;

    private integer $dni;

    private String $fechaNacimiento;

    public function getNombres()
    {
        return $this->nombre;
    }

    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fecha)
    {
        $this->FechaNacimiento = $fecha;
    }

    public abstract function calcularEdad();
}