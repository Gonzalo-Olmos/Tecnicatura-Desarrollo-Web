<?php

class Disquera{

private $hora_desde;
private $hora_hasta;
private $estado;
private $direccion;
private $objDueño; //El atributo dueño debe referenciar a uno objeto de la clase Persona

//constructor
public function __construct($hora_desde, $hora_hasta, $estado, $direccion, $objDueño){
    $this->hora_desde=$hora_desde;
    $this->hora_hasta=$hora_hasta;
    $this->estado=$estado;
    $this->direccion=$direccion;
    $this->objDueño=$objDueño;
}

//metodos Getters
public function getHora_desde(){
    return $this->hora_desde;
}
public function getHora_hasta(){
    return $this->hora_hasta;
}
public function getEstado(){
    return $this->estado;
}
public function getDireccion(){
    return $this->direccion;
}
public function getDueño(){
    return $this->objDueño;
}

//metodos Setters
public function setHora_desde($hora_desde){
    $this->hora_desde = $hora_desde;
}
public function setHora_hasta($hora_hasta){
    $this->hora_hasta = $hora_hasta;
}
public function setEstado($estado){
    $this->estado = $estado;
}
public function setDireccion($direccion){
    $this->direccion = $direccion;
}
public function setDueño($objDueño){
    $this->objDueño = $objDueño;
}

//metodo Tostring
public function __toString(){
    return  " Desde: ". $this->getHora_desde()."hs "." hasta ".$this->getHora_hasta()."hs \n".
            " Estado: ".$this->getEstado()."\n".
            " Dirección: ".$this->getDireccion()."\n".
            " Dueño: ".$this->getDueño()."\n";
}
       

//c) dentroHorarioAtencion($hora, $minutos): Que dada una hora y minutos retorna true si la tienda
//   debe encontrarse abierta en ese horario y false en caso contrario
public function dentroHorarioAtencion($hora, $minutos){
    $open = false;
    if ($this->getHora_desde()<$hora && $hora <$this->getHora_hasta()) {
                                              
    }
}



}
?>