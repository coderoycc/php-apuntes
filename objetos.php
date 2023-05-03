<?php
class Persona{
  public $nombre;
  public $edad;
  private $estado;
  public function __construct($nombre="",$edad=0){
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->estado = "SOLTERO";
  }
  public function asignarNombre($nombre){
    $this->nombre = $nombre;
  }
  public function obtenerNombre(){
    echo $this->nombre;
  }
  public function asignarEdad($edad){
    $this->edad = $edad;
  }
  public function obtenerEdad(){
    echo $this->edad;
  }
  public function esMayorDeEdad(){
    if($this->edad >= 18){
      echo "\nEs mayor de edad";
    }else{
      echo "\nNo es mayor de edad";
    }
  }
  public function mostrar(){
    echo "\nNombre: ".$this->nombre." Edad: ".$this->edad;
  }
  public static function metodoEstatico(){
    echo "\nMetodo estatico";
  }
}
class Estudiante extends Persona{
  public $carrera;
  public function asignarCarrera($carrera){
    $this->carrera = $carrera;
  }
  public function obtenerCarrera(){
    echo $this->carrera;
  }
  public function mostrar(){
    echo "\nNombre: ".$this->nombre." Edad: ".$this->edad." Carrera: ".$this->carrera;
  }
}

$persona = new Persona();
$persona->asignarNombre("Juan");
$persona->asignarEdad(17);
$persona->mostrar();
$persona->esMayorDeEdad();

$estudiante = new Estudiante();
$estudiante->asignarNombre("Pedro");
$estudiante->asignarEdad(20);
$estudiante->asignarCarrera("Ingenieria en Sistemas");
$estudiante->mostrar();
$estudiante->esMayorDeEdad();

$predeterminado = new Persona();
$predeterminado->mostrar();

// Llamar a un metodo estatico (sin instanciar)
Persona::metodoEstatico();
?>