<?php

namespace App\Models;

class Municipalidad
{
    private $nombre;

    private $direccion;

    private $local;

    public function setNombre($nombre)
    {
        $this ->nombre = $nombre;
    }

    public function getNombre()
    {
         return $this ->nombre;
    }
}