<?php

class Persona{

//atributos
private $nombre;
private $apellido;
private $nroDni;
private $direccion;
private $telefono;
private $neto;
//constructor

public function __construct($nombre, $apellido, $nroDni, $direccion, $telefono, $neto){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->nroDni = $nroDni;
    $this->direccion = $direccion;
    $this->telefono = $telefono;
    $this->neto = $neto;
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

public function getDireccion(){
    return $this->direccion;
}

public function getTelefono(){
    return $this->telefono;
}
public function getNeto(){
    return $this->neto;
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

public function setDireccion($direccion){
    $this->direccion = $direccion;
}
public function setTelefono($telefono){
    $this->telefono = $telefono;
}
public function setNeto($neto){
    $this->neto = $neto;
}

//metodo Tostring
public function __toString(){
    return "  Nombre: ". $this->getNombre()."\n".
            "  Apellido: ".$this->getApellido()."\n".
            "  Nro Dni: ".$this->getNroDni()."\n".
            "  Direccion: ".$this->getDireccion()."\n".
            "  Telefono: ".$this->getTelefono()."\n".
            "  Neto: ".$this->getNeto()."\n";
}

}
?>