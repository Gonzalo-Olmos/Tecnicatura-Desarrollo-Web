<?php
class Prestamo{

//atributos identificación, código del electrodoméstico, fecha otorgamiento,
// monto, cantidad_de_cuotas, taza de interés, la colección de cuotas y la referencia a la persona que solicito el préstam
private $id;
private $codigoElectrodomestico;
private $fechaOtorgamiento;
private $monto;
private $cantidad_de_cuotas;
private $taza_de_interes;
private $colCuotas=[]; //Coleección de objetos Cuotas
private $objPersona; //referencia a la persona que solicito el préstamo

//constructor
//Recibe como parámetros los siguientes valores: identificación, monto, cantidad de cuotas,
//taza de interés y la referencia a la persona que solicito el préstamo. El constructor debe asignar los valores recibidos a las variables instancias que corresponda.

public function __construct($id, $monto, $cantidad_de_cuotas, $taza_de_interes, $objPersona){
    $this->id = $id;
    $this->monto = $monto;
    $this->cantidad_de_cuotas = $cantidad_de_cuotas;
    $this->taza_de_interes = $taza_de_interes;
    $this->objPersona = $objPersona;
}

//metodos Getters
public function getId(){
    return $this->id;
}
public function getCodigoElectrodomestico(){
    return $this->codigoElectrodomestico;
}
public function getFechaOtorgamiento(){
    return $this->fechaOtorgamiento;
}
public function getMonto(){
    return $this->monto;
}
public function getCantidad_de_Cuotas(){
    return $this->cantidad_de_cuotas;
}
public function getTaza_de_interes(){
    return $this->taza_de_interes;
}
public function getColeccion_de_cuotas(){
    return $this->colCuotas;
}
public function getPersona(){
    return $this->objPersona;
}

//metodos Setters
public function setId($id){
    $this->id= $id ;
}
public function setCodigoElectrodomestico( $codigo){
    $this->codigoElectrodomestico = $codigo;
}
public function setFechaOtorgamiento($fechaOtorgamiento){
    $this->fechaOtorgamiento = $fechaOtorgamiento;
}
public function setMonto( $monto){
    $this->monto = $monto;
}
public function setCantidad_de_Cuotas($cantCuotas){
    $this->cantidad_de_cuotas = $cantCuotas;
}
public function setTaza_de_interes($taza_de_interes){
   $this->taza_de_interes = $taza_de_interes;
}
public function setColeccion_de_cuotas($colCuotas){
    $this->colCuotas = $colCuotas;
}
public function setPersona($objPersona){
    $this->objPersona = $objPersona;
}

//metodo Tostring
public function __toString(){
    return  " -id: ". $this->getId()."\n".
            " -codigo: ".$this->getCodigoElectrodomestico()."\n".
            " -fechaOtorgamiento: ".$this->getFechaOtorgamiento()."\n".
            " -monto: ".$this->getMonto()."\n".
            " -cantidad de Cuotas: ".$this->getCantidad_de_Cuotas()."\n".
            " -taza de interes: ".$this->getTaza_de_interes()."\n".
            " -Coleccion Cuotas: ".implode(" ",$this->getColeccion_de_cuotas())."\n".
            " -Cliente: \n".$this->getPersona()."\n";
}

/**Implementar el método privado calcularInteresPrestamo(numCuota) que recibe por parámetro el numero de la cuota 
 * y calcula el importe del interés sobre el saldo deudor.
 * Por ejemplo si el préstamo tiene 5 cuotas, el monto total = 50000 y el interés 0.1% entonces el monto del
 * interés sobre saldo deudor que debe calcularse para cada una de las cuotas deben ser los siguientes
 * 
 * @param int $numCuota
 * @return float  Monto del Interes de cada cuota
 */
private function calcularInteresPrestamo($numCuota){
        //montoInteres= ( monto - (( monto/ cantidad_de_cuotas) * numCuota -1)) * taza_de_interés/0.01

        $montoInteres = ($this->getMonto() - (($this->getMonto()/$this->getCantidad_de_Cuotas())* $numCuota-1)) * $this->getTaza_de_interes()/0.01;

return $montoInteres;
}


/**Implementar el método otorgarPrestamo que setea la variable instancia fecha otorgamiento, con la
    fecha actual (puede utilizar el valor retornado por la función de PHP getdate()) y genera cada una de las
    cuotas dependiendo el valor almacenado en la variable instancia “cantidad_de_cuotas” y monto. El
    importe total de la cuota debe ser calculado de la siguiente manera: (monto / cantidad_de_cuotas )
    y el monto correspondiente al interés debe ser el valor retornado por el método calcularInteresPrestamo(numeroCuota) implementado en el inciso anterio
 * 
 */
 public function otorgarPrestamo(){

    //setea la variable instancia fecha otorgamiento, con la fecha actual
    $arregloFecha=getdate();
    $this->setFechaOtorgamiento(" ".$arregloFecha["mday"]."/ ".$arregloFecha["mon"]."/".$arregloFecha["year"]);

   //Genera cada una de las cuotas dependiendo el valor almacenado en la variable instancia “cantidad_de_cuotas” y monto
    for ($i=1; $i <= $this->getCantidad_de_Cuotas(); $i++) { 
        $colCuotas = $this->getColeccion_de_cuotas();

        $montoCuota = $this->getMonto() / $this->getCantidad_de_Cuotas();
        $montoInteres = $this->calcularInteresPrestamo($i);
    
        $objCuota = new Cuota($i,$montoCuota, $montoInteres);
        $colCuotas[$i-1] = $objCuota;
        $this->setColeccion_de_cuotas($colCuotas);
    }

 }


/**Implementar el método darSiguienteCuotaPagar método que retorna la referencia a la siguiente cuota
*  que debe ser abonada de un préstamo, si el préstamo tiene todas sus cuotas canceladas retorna null.
*
*@return Cuota  la referencia a la siguiente cuota que debe ser abonada
*/
public function darSiguienteCuotaPagar(){
    $i=0;
    $indice = -1;
    $flag = true;
    $colCuotas = $this->getColeccion_de_cuotas();
 
        do {   
            //este if verifica si la cuota está cancelada.
            if ($colCuotas[$i]->getCancelada() == false) {
                $indice = $i;
                $flag = false;
            }
            
            $i++;
        } while ($flag == true && $i<count($colCuotas) );
        
        //si el indice es -1 quiere decir que todas sus cuotas estan abonadas
        if ($indice == -1 ) {
            $objCuota = null;
        }else{ //sino quiere decir que el indice es el numero de la posicion de la cuota a abonar
            $objCuota = $colCuotas[$indice];
        }
       
return $objCuota;
}



















}
?>