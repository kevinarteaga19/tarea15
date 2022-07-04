<?php

namespace App\Models;

class Cliente
{
    private $nombres;

    private $dni;

    public function __construct($nombres, $dni)
    {
        $this->nombres = $nombres;

        $this->dni = $dni;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function getDni()
    {
        return $this->dni;
    }
}