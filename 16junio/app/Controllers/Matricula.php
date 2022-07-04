<?php

namespace App\Controllers;

use App\Models\{Estudiante,Curso};

class Matricula
{
    private $arreglo1;

    private $arreglo2;

    public function __construct()
    {
        $this->arreglo1 = [];

        $this->arreglo2 = [];
    }

    public function agregar1(Estudiante $estudiante)
    {
        $this->arreglo1[] = $estudiante;
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