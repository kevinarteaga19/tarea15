<?php

namespace App\Models\Tarea;

use App\Models\Tarea\Persona;

class Alumno extends Persona
{
    public function calcularEdad($fechaNacimiento): float
    {
        $edad = 2022 - $fechaNacimiento;

        return $edad;
    }
}