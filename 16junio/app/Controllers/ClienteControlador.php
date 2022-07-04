<?php

namespace App\Controllers;

use App\Models\Cliente;

class ClienteControlador
{
    private $arreglo;
    
    public function __construct()
    {
        $this->arreglo = [];
    }

    public function agregar(Cliente $cliente)
    {
        $this->arreglo[] = $cliente;
    }

    public function listar()
    {
        return $this->arreglo;
    }
}