<?php

require_once __DIR__.'/../vendor/autoload.php';

/*use App\Models\{Estudiantes, Municipalidad,Cliente};
use App\Controllers\ ClienteControlador;

//$cliente = new Cliente('Max Plack', '12345678');
//print_r($cliente);

$controlador = new ClienteControlador();

$controlador ->agregar(new Cliente('Max Plack', 123));
$controlador ->agregar(new Cliente('James Maxwell', 456));
$controlador ->agregar(new Cliente('Alesandro Volta', 789));

foreach($controlador->listar() as $cliente){

    echo "NOMBRE: ".$cliente->getNombres()."<br>";
    echo "DNI; ".$cliente->getDni()."<br>";
}*/
/*
use App\Models\{Estudiante,Curso};
use App\Controllers\ Matricula;

$controlador = new Matricula();

$controlador ->agregar1(new Estudiante('Kevin', 72627795,1234));
$controlador ->agregar1(new Estudiante('Fran', 74859732,5689));
$controlador ->agregar1(new Estudiante('Jean', 74893157,7412));

$controlador ->agregar2(new Curso('Programacion orientada a objetos', 4));
$controlador ->agregar2(new Curso('Redes', 4));
$controlador ->agregar2(new Curso('Lenguaje de programacion', 5));

echo "MATRICULA"."<br>";

foreach($controlador->listar1() as $estudiante){

    echo "NOMBRE: ".$estudiante->getNombre()."<br>";
    echo "DNI: ".$estudiante->getDni()."<br>";
    echo "CODIGO: ".$estudiante->getCodigo()."<br>";
}

foreach($controlador->listar2() as $curso){

    echo "NOMBRE: ".$curso->getNombre()."<br>";
    echo "CREDITOS: ".$curso->getCreditos()."<br>";
}*/

/*******HERENCIA*******/

/*use App\Models\{Empleado, Administrativo};

/*$empleado = new Empleado ("Georg","Ohm", 56, 2000, 0.2);

echo "EMPLEADO: ".$empleado ->getNombres()."/n";*/

/*$administrativo = new Administrativo("Georg","Ohm", 56, 2000, 0.2);

echo "SALARIO: ".$administrativo->getSalario()."/n";
echo "COMISION".$administrativo->porcentajeComision()."/n";
echo "SUELDO".$administrativo->sueldo()."/n";
*/

/*******ABSTRACTA*******/

/*use App\Models\{Comprobante, Factura, Boleta};

$factura = new Factura();
echo "FACTURA: ".$factura->calcular(200)."\n";

$boleta = new Boleta();
echo "BOLETA: ".$boleta->calcular(100)."\n";

$comprobante = Comprobante::getComprobante(Comprobante::FACTURA);
var_dump($comprobante);*/

/*******TAREA14******/

/*use App\Models\Tarea\{Persona, Alumno, Docente, Matricula, Curso};

$controlador1 = new Curso();

echo "NOMBRE: ".$curso->getNombre()."<br>";
echo "CREDITOS: ".$curso->getCreditos()."<br>";

$controlador1 ->agregarD(new Docente('Freddy','Vigilio', 123, 1994));
$controlador1 ->agregarD(new Docente('Luis','Geronimo', 456, 1998));
$controlador1 ->agregarD(new Docente('Marcos','Figeroa', 789, 1898));

echo "CURSO"."<br>";

foreach($controlador1->listarD() as $docente){
    echo "NOMBRE: ".$docente->getNombre()."<br>";
    echo "NOMBRE: ".$docente->getApellido()."<br>";
    echo "NOMBRE: ".$docente->getDni()."<br>";
    echo "NOMBRE: ".$docente->getFechaNacimiento()."<br>";
}

$controlador = new Matricula();

$controlador ->agregar1(new Estudiante('Kevin', 72627795,1234));
$controlador ->agregar1(new Estudiante('Fran', 74859732,5689));
$controlador ->agregar1(new Estudiante('Jean', 74893157,7412));

$controlador ->agregar2(new Curso('Programacion orientada a objetos', 4));
$controlador ->agregar2(new Curso('Redes', 4));
$controlador ->agregar2(new Curso('Lenguaje de programacion', 5));

echo "MATRICULA"."<br>";

foreach($controlador->listar1() as $estudiante){

    echo "NOMBRE: ".$estudiante->getNombre()."<br>";
    echo "DNI: ".$estudiante->getDni()."<br>";
    echo "CODIGO: ".$estudiante->getCodigo()."<br>";
}

foreach($controlador->listar2() as $curso){

    echo "NOMBRE: ".$curso->getNombre()."<br>";
    echo "CREDITOS: ".$curso->getCreditos()."<br>";
}

$alumno = new Alumno();
echo "EDAD DE ALUMNO: ".$alumno->calcularEdad(2001)."\n";

$docente = new Docente();
echo "EDAD DE Docente: ".$docente->calcularEdad(1996)."\n";

/*$persona = Persona::getPersona(Persona::$nombres);
var_dump($persona);*/

/******TAREA15******/

$alumno = new Alumno();
$alumno->setNombres('kevin')."\n";
$alumno->setFechaNacimiento('2001-04-19');
echo "Alumno:".$alumno->getNombres()."\n"
echo "Edad:".$alumno->calcularEdad()."\n"