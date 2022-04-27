<?php

class Cuota{

//atributos  numero ,monto_cuota , monto_interes y cancelada 
private $numero;
private $monto_cuota;
private $monto_interes;
private $cancelada;

//constructor

public function __construct($numero, $monto_cuota, $monto_interes){
    $this->numero = $numero;
    $this->monto_cuota = $monto_cuota;
    $this->monto_interes = $monto_interes;
    $this->cancelada = (bool)false;
}

//metodos Getters
/** getNumero
 * @return float
 */
public function getNumero(){
    return $this->numero;
}

/** getMonto_Cuota
 * @return float
 */
public function getMonto_Cuota(){
    return $this->monto_cuota;
}

/** getMonto_Interes
 * @return float
 */
public function getMonto_Interes(){
    return $this->monto_interes;
}

/** getCancelada
 * @return boolean 
 */
public function getCancelada(){
    $cancelada = $this->cancelada;
    return $cancelada ;
}

//metodos Setters
/** setNumero
 * @param float $numero
 */
public function setNumero($numero){
    $this->numero = $numero;
}

/** setMonto_Cuota
 * @param float $monto_cuota
 */
public function setMonto_Cuota($monto_cuota){
    $this->monto_cuota = $monto_cuota;
}

/** setMonto_Interes
 * @param float $monto_interes
 */
public function setMonto_Interes($monto_interes){
    $this->monto_interes = $monto_interes;
}

/** setCancelada
 * @param boolean $cancelada
 */
public function setCancelada($cancelada){
    $this->cancelada = $cancelada;
}


//metodo Tostring
public function __toString(){
    return "\n --Numero: ". $this->getNumero()."\n".
            " --Monto Cuota: ".$this->getMonto_Cuota()."\n".
            " --Monto Interes : ".$this->getMonto_Interes()."\n".
            " --Cancelada: ". (int)$this->getCancelada()."\n";
}

/**Implementar el método darMontoFinalCuota() que retorna el importe total de la cuota mas los intereses que deben ser aplicados.
 * 
 * @return float importe total de la cuota mas los intereses
 */
public function darMontoFinalCuota(){

    $montoTotalCuota = $this->getMonto_Cuota() + $this->getMonto_Interes();

    return $montoTotalCuota;
}



}

?>