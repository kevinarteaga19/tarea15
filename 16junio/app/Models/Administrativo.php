/*HERENCIA*/
<?php

namespace App\Models;

use App\Models\Empleado;

class Administrativo extends Empleado
{
    private float $salarioBaase;

    public function __construct(string $nombres, string $apellidos, int $dni, float $salario, float $comision)
    {
        parent::__construct($nombres, $apellidos, $dni, $salario, $comision);
        
        $this -> salarioBase = $salario;
    }

    public function getSalarioBase()
    {
        return $this->salarioBase;
    }

    public function porcentajeComision(): float
    {
        return $this->salarioBase * $this->comision;
    }

    public function sueldo(): float
    {
        return $this->porcentajeComision()+ $this->salarioBase;
    }

    public function show(): string 
    {
        return $this->nombres." ".$this->apellidos." ".$this->dni;
    }
}