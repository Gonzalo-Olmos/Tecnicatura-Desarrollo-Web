<?php

class CuentaBancaria{

//atributos
private $numCuenta;
private $objPersona;
private $saldoActual;
private $interesAnual;

//constructor
public function __construct($numCuenta, $objPersona, $saldoActual, $interesAnual){
  $this->numCuenta = $numCuenta;
  $this->objPersona = $objPersona;
  $this->saldoActual = $saldoActual;
  $this->interesAnual = $interesAnual;
}

//setters
public function setNumCuenta($numCuenta){
    $this->numCuenta = $numCuenta;
}

public function setObjPersona($objPersona){
    $this->objPersona = $objPersona;
}

public function setSaldoActual($saldoActual){
    $this->saldoActual = $saldoActual;
}

public function setInteresAnual($interesAnual){
    $this->interesAnual = $interesAnual;
}

//getters

public function getNumCuenta(){
    return $this->numCuenta;
}

public function getObjPersona(){
    return $this->objPersona;
}

public function getSaldoActual(){
    return $this->saldoActual;
}

public function getInteresAnual(){
    return $this->interesAnual;
}

//To String
public function __toString(){
    //$persona = $this->getObjPersona();

    return  "\n Numero Cuenta: ".$this->getNumCuenta().
            "\n Datos de Cliente:\n".$this->getObjPersona().
           //" -Nombre: ".$this->getObjPersona()->getNombre().
           //"\n -Apellido: ".$this->getObjPersona()->getApellido().
            //"\n -Tipo Dni: ".$this->getObjPersona()->getTipoDni().
            //"\n -Nro Dni: ".$this->getObjPersona()->getNroDni().
            "\nSaldo Actual : ".$this->getSaldoActual().
            "\nInteres Anual: ".$this->getInteresAnual();
}

/**
 * Función Para actualizar el saldo de una cuenta aplicándole el interés diario
 * Obtiene el interes Anual y el Saldo Actual
 */
public function actualizarSaldo(){

$interesAnual = $this->getInteresAnual(); //Obtengo el interes Anual 
$saldoActual = $this->getSaldoActual(); //Obtengo el Saldo Actual
//calculo el porcentaje de interes diario
$porcentajeInteresDiario = $interesAnual/365;
//multiplico el porcentaje de interes diario por el saldo actual para obtener el interes Diario
$interesDiario = ($porcentajeInteresDiario * $saldoActual)/100;
//sumo el interes Diario con el saldo actual
$saldoModificado = $interesDiario+$saldoActual;

//Seteo El saldo Actual
$this->setSaldoActual($saldoModificado);
}

/**
 * depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta.
 * Esta funcion recibe como parametro la cantidad a depositar.
 * Suma con el saldo actual y setea el saldo actual.
 * @param float $cant
 */
public function depositar($cant){
        $deposito = $this->getSaldoActual()+ $cant;
        $this->setSaldoActual($deposito);
}

/**
 * retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo).
 * Recibe como parametro la cantidad a Retirar.
 * Verifica si la cuenta tiene saldo.
 * Resta la cantidad a retirar al Saldo Actual.
 * @param float $cant
 * @return boolean verdadero si puedo retirar saldo, falso en caso contrario
 */
public function retirar($cant){
    $saldoActual = $this->getSaldoActual();
    if ($saldoActual > 0 && $cant <= $saldoActual) {
        $saldoModificado= $saldoActual-$cant;
        $this->setSaldoActual($saldoModificado);
        return true;
    }else{
       echo false;
    }
}


















}
?>