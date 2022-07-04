<?php

namespace App\Models\Tarea;

class Curso
{
    private $nombre;

    private $creditos;

    private $arregloD;

    public function __construct($nombre, $creditos, $arregloD)
    {
        $this->nombre = $nombre;

        $this->creditos = $creditos;

        $this->arregloD = [];
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCreditos()
    {
        return $this->creditos;
    }

    public function agregarD(Docente $docente)
    {
        $this->arregloD[] = $docente;
    }

    public function listarD()
    {
        return $this->arregloD;
    }
}