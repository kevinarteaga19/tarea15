<?php

namespace App\Models;

class Estudiante
{
    private $nombre;

    private $dni;

    private $codigo;

    public function __construct($nombre, $dni, $codigo)
    {
        $this->nombre = $nombre;

        $this->dni = $dni;

        $this->codigo = $codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

}