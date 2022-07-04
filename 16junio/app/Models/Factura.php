<?php

namespace App\Models;

use App\Models\Comprobante;

class Factura extends Comprobante
{
    public function calcular($total): float
    {
        $consumo = $total * 0.18;

        $impuesto = $total - $consumo;

        return $impuesto;
    }
}