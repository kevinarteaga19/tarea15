<?php

namespace App\Models;
/*HERENCIA*/
class Empleado
{
    protected string $nombres;

    protected string $apellidos;

    protected int $dni;

    protected float $salario;

    protected float $comision;

    public function __construct(string $nombres, string $apellidos, int $dni, float $salario, float $comision)
    {
        $this -> nombres = $nombres;
        $this -> apellidos = $apellidos;
        $this -> dni = $dni;
        $this -> salario = $salario;
        $this -> comision = $comision;
    }

     protected function getNombres(): string
     {
        return $this->nombres;
     }

     protected function setNombres(String $nombres): void
     {
        $this ->nombres = $nombres;
     }

     protected function getApellidos()
     {
        return $this->apellidos;
     }

     protected function getDni()
     {
        return $this->dni;
     }

     protected function getSalario()
     {
        return $this->salario;
     }

     protected function getComision()
     {
        return $this->comision;
     }

     protected function sueldo()
     {

     }

     protected function percentajeComision()
     {

     }

     public function __toString()
     {
        return 
     }


}