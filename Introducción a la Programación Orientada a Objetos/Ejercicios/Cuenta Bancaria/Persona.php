<?php

class Persona{

//atributos
private $nombre;
private $apellido;
private $tipoDni;
private $nroDni;
//constructor

public function __construct($nombre, $apellido, $tipoDni, $nroDni,){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->tipoDni = $tipoDni;
    $this->nroDni = $nroDni;
  
}

//metodos Getters
public function getNombre(){
    return $this->nombre;
}

public function getApellido(){
    return $this->apellido;
}

public function getTipoDni(){
    return $this->tipoDni;
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

public function setTipoDni($tipoDni){
    $this->nroDni = $tipoDni;
}

public function setNroDni($nroDni){
    $this->nroDni = $nroDni;
}



//metodo Tostring
public function __toString(){
    return  "  ". $this->getNombre()." ".$this->getApellido()."\n".
            " -Tipo Dni: ".$this->getNroDni()."\n".
            " -Nro Dni: ".$this->getNroDni()."\n";
}

}

?>