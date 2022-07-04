<?php

namespace App\Models\Tarea;

use App\Models\Tarea\{Alumno, Docente};

abstract class Persona
{
    public String $nombres;

    public String $apellidos;

    public integer $dni;

    public String $fechaNacimiento;

    public function __construct($nombres, $apellidos, $dni, $fechaNacimiento)
    {
        $this->nombres = $nombres;

        $this->apellidos = $apellidos;

        $this->dni = $dni;

        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellidos;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

   /* public static function getPersona($tipo)
    {
        $objeto = NULL;

        switch($tipo)
        {
            case self::$nombres;
                 $objeto = new Alumno();
                 break;
            case self::$apellidos;
                 $objeto = new Alumno();
                 break;
            case self::$dni;
                 $objeto = new Alumno();
                 break;
            case self::$fechaNacimiento;
                 $objeto = new Alumno();
                 break;

            case self::$nombres;
                 $objeto = new Docente();
                 break;
            case self::$apellidos;
                 $objeto = new Docente();
                 break;
            case self::$dni;
                 $objeto = new Docente();
                 break;
            case self::$fechaNacimiento;
                 $objeto = new Docente();
                 break;
        }

        return $objeto;
    }*/

    public abstract function calcularEdad($edad);
}