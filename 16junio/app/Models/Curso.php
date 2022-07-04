<?php

namespace App\Models;

class Curso
{
    private $nombre;

    private $creditos;

    public function __construct($nombre, $creditos)
    {
        $this->nombre = $nombre;

        $this->creditos = $creditos;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCreditos()
    {
        return $this->creditos;
    }
}