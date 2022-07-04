<?php

namespace App\Models\Tarea;

use App\Models\Tarea{Alumno,Curso};

class Matricula
{
    private $arreglo1;

    private $arreglo2;

    public function __construct()
    {
        $this->arreglo1 = [];

        $this->arreglo2 = [];
    }

    public function agregar1(Alumno $alumno)
    {
        $this->arreglo1[] = $alumno;
    }

    public function listar1()
    {
        return $this->arreglo1;
    }

    public function agregar2(Curso $curso)
    {
        $this->arreglo2[] = $curso;
    }

    public function listar2()
    {
        return $this->arreglo2;
    }
}