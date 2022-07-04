<?php

namespace App\Models;

use App\Models\{Factura, Boleta};

abstract class Comprobante
{
    public const FACTURA = 10;

    public const BOLETA = 20;

    public static function getComprobante($tipo)
    {
        $objeto = NULL;

        switch($tipo)
        {
            case self::FACTURA;
                 $objeto = new Factura();
                 break;
            case self::BOLETA;
                 $objeto = new Boleta();
                 break;
        }

        return $objeto;
    }

    /*public static function getBoleta()
    {

    }

    public static function getFactura()
    {

    }*/

    //Metodos Abstractos

    public abstract function calcular($total);
}