<?php

namespace App\Models;

use App\Models\Comprobante;

class Boleta
{
    public function calcular($total): float
    {
        $producto = $total * 0.1;

        return $producto;
    }
}