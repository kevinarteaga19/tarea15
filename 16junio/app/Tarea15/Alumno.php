<?php

namespace App\Models\Tarea15;

use App\Models\Tarea\{Persona, Crud};

class Alumno extends Persona implements Crud
{
    private $contador;

    public function calcularEdad()
    {
        $fechaActual = date('Y-m-d');

        $fechaNacimiento = $fechaActual - $this->getFechaNacimiento();

        return $fechaNacimiento;
    }
    public function create($nombres)
    {
        $this-> nombres = $nombres;

        $this-> alumno = new Alumno[];

        $this -> contador = 0;
    }

    public function listar()
    {

    }

    public function update($dni)
    {

    }

    public function delete($dni)
    {

    }
}