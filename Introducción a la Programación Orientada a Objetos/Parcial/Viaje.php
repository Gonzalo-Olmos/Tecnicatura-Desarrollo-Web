<?php

class Viaje{

//atributos  
/* destino, hora de partida, hora de llegada, número, importe, fecha,
cantidad de asientos totales, cantidad de asientos disponibles, y una referencia a la persona responsable
del viaje. */
private $destino;
private $hora_de_partida;
private $hora_de_llegada;
private $numero;
private $importe;
private $fecha;
private $cant_asientos_totales;
private $cant_asientos_disponibles;
private $objResponsable;

//constructor

public function __construct($destino, $hora_de_partida, $hora_de_llegada, $numero, $importe, $fecha, $cant_asientos_totales, $cant_asientos_disponibles, $objResponsable){
    $this->destino = $destino;
    $this->hora_de_partida = $hora_de_partida;
    $this->hora_de_llegada = $hora_de_llegada;
    $this->numero = $numero;
    $this->importe = $importe;
    $this->fecha = $fecha;
    $this->cant_asientos_totales = $cant_asientos_totales;
    $this->cant_asientos_disponibles = $cant_asientos_disponibles;
    $this->objResponsable = $objResponsable;
}

//metodos Getters
public function getDestino(){
    return $this->destino;
}

public function getHora_de_partida(){
    return $this->hora_de_partida;
}

public function getHora_de_llegada(){
    return $this->hora_de_llegada;
}

public function getNumero(){
    return $this->numero;
}

public function getImporte(){
    return $this->importe;
}

public function getFecha(){
    return $this->fecha;
}
public function get(){
    return $this->fecha;
}
public function getCantidad_asientos_totales(){
    return $this->cant_asientos_totales;
}
public function getCantidad_asientos_disponibles(){
    return $this->cant_asientos_disponibles;
}
public function getResponsable(){
    return $this->objResponsable;
}


//metodos Setters
public function setDestino($destino){
    $this->destino = $destino;
}

public function setHora_de_partida($hora_de_partida){
    $this->hora_de_partida = $hora_de_partida;
}

public function setHora_de_llegada($hora_de_llegada){
    $this->hora_de_llegada = $hora_de_llegada;
}

public function setNumero($numero){
    $this->numero = $numero;
}

public function setImporte($importe){
    $this->importe = $importe;
}

public function setFecha($fecha){
    $this->fecha = $fecha;
}
public function setCant_asientos_totales($cant_asientos_totales){
    $this->cant_asientos_totales = $cant_asientos_totales;
}
public function setCant_asientos_disponibles($cant_asientos_disponibles){
    $this->cant_asientos_disponibles = $cant_asientos_disponibles;
}
public function setResponsable($objResponsable){
    $this->objResponsable = $objResponsable;
}


//metodo Tostring
public function __toString(){
//$destino, $hora_de_partida, $hora_de_llegada, $numero, $importe, $fecha, $cant_asientos_totales, $cant_asientos_disponibles, $objResponsable
    return  
            "------------------------------------\n".
            "  Destino: ".$this->getDestino()."\n".
            "  Hora_de_partida: ".$this->getHora_de_partida()."\n".
            "  Hora_de_llegada: ".$this->getHora_de_llegada()."\n".
            "  Numero: ".$this->getNumero()."\n".
            "  Importe: ".$this->getImporte()."\n".
            "  Fecha: ".$this->getFecha()."\n".
            "  Cant_asientos_totales: ".$this->getCantidad_asientos_totales()."\n".
            "  Cant_asientos_disponibles: ".$this->getCantidad_asientos_disponibles()."\n".
            "  Responsable: \n".$this->getResponsable()."\n".
            "------------------------------------\n";
}


/**Metodo Asingar Asientos
 * Este metodo recibe por parámetros la cantidad de asientos que desean asignarse.
 * El método retorna verdadero en caso que la asignación pueda concretarse y falso en caso contrario
 *@param int $cantAsientos
 *@return boolean
 */
public function asignarAsientosDisponibles($cantAsientos){
$asientosTotales = $this->getCantidad_asientos_totales();
$asientosDisponibles = $this->getCantidad_asientos_disponibles();
$asigno = false;

if ($cantAsientos <= $asientosDisponibles) {
    $asientosDisponibles = $asientosDisponibles -$cantAsientos;
    $this->setCant_asientos_disponibles($asientosDisponibles);
    $asigno = true;
}

return $asigno;
}

}

?>