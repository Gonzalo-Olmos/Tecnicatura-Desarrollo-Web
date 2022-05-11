<?php

class Persona{

//atributos
private $nombre;
private $apellido;
private $nroDni;

//constructor
public function __construct($nombre, $apellido, $nroDni){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->nroDni = $nroDni;
}

//metodos Getters
public function getNombre(){
    return $this->nombre;
}

public function getApellido(){
    return $this->apellido;
}

public function getNroDni(){
    return $this->nroDni;
}


//metodos Setters
public function setNombre($nombre){
    $this->nombre = $nombre;
}

public function setApellido($apellido){
    $this->apellido = $apellido;
}

public function setNroDni($nroDni){
    $this->nroDni = $nroDni;
}


//metodo Tostring
public function __toString(){
    return "  Nombre: ". $this->getNombre()."\n".
            "  Apellido: ".$this->getApellido().",\n".
            "  Nro Dni: ".$this->getNroDni()."\n";
}

}
?>