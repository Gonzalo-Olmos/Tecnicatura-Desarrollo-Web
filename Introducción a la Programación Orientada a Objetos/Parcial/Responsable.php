<?php

class Responsable{

//atributos
private $nombre;
private $apellido;
private $nroDni;
private $direccion;
private $mail;
private $telefono;

//constructor

public function __construct($nombre, $apellido, $nroDni, $direccion, $mail, $telefono){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->nroDni = $nroDni;
    $this->direccion = $direccion;
    $this->mail = $mail;
    $this->telefono = $telefono;
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

public function getMail(){
    return $this->mail;
}

public function getTelefono(){
    return $this->telefono;
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

public function setMail($mail){
    $this->mail = $mail;
}

public function setTelefono($telefono){
    $this->telefono = $telefono;
}


//metodo Tostring
public function __toString(){
    return  "< ". $this->getNombre()." ".$this->getApellido()." >\n".
            "   Nro Dni: ".$this->getNroDni()."\n".
            "   Direccion: ".$this->getDireccion()."\n".
            "   Mail: ".$this->getMail()."\n".
            "   Telefono: ".$this->getTelefono()."\n";
}




}

?>