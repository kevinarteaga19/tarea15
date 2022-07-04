<?php

namespace App\Models\Tarea15;

use App\Models\Tarea\Persona;

class Docente extends Persona
{
    public function calcularEdad()
    {
        $fechaActual = date('Y-m-d');

        $fechaNacimiento = $fechaActual - $this->getFechaNacimiento();

        return $fechaNacimiento;
    }
}