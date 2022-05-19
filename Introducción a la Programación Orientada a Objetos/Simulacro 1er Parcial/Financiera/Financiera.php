<?php
include_once"Prestamo.php";
class Financiera{

//atributos denominación, dirección y la colección de prestamos otorgados
private $denominación;
private $dirección;
private $colPrestamos=[];


//constructor
public function __construct($denominación, $dirección){
    $this->denominación = $denominación;
    $this->dirección = $dirección;
}

//metodos Getters
/** getDenominacion
 * @return String
 */
public function getDenominacion(){
    return $this->denominación;
}

/** getDirección
 * @return String
 */
public function getDirección(){
    return $this->dirección;
}

/** getColeccionPrestamos
 * @return array
 */
public function getColeccionPrestamos(){
    return $this->colPrestamos;
}

//metodos Setters
/** setDenominacion
 * @param String $denominación
 */
public function setDenominacion($denominación){
    $this->denominación = $denominación;
}

/** setDireccion
 * @param String $dirección
 */
public function setDireccion($dirección){
    $this->dirección = $dirección;
}

/** setColeccionPrestamos
 * @param array $colPrestamos
 */
public function setColeccionPrestamos($colPrestamos){
    $this->colPrestamos = $colPrestamos;
}

//metodo Tostring
public function __toString(){
    return "\n  Denominación: ". $this->getDenominacion()."\n".
            "  Dirección: ".$this->getDirección()."\n".
            "  Coleccion Prestamos:\n".implode(" ",$this->getColeccionPrestamos())."\n";
}


/** Metodo incorporarPrestamo que incorpora un nuevo prestamo a la coleccion de prestamos
 * @param Prestamo $nuevoPrestamo
 */
public function incorporarPrestamo($nuevoPrestamo){
    $coleccionPrestamos = $this->getColeccionPrestamos();
    $coleccionPrestamos[] = $nuevoPrestamo;
    $this->setColeccionPrestamos($coleccionPrestamos);
}

/**Implementar el método otorgarPrestamoSiCalifica, método que recorre la lista de prestamos que no
han sido generadas sus cuotas. Por cada préstamo, se corrobora que su monto dividido la
cantidad_de_cuotas no supere el 40 % del neto del solicitante, si la verificación es satisfactoria se invoca
al método otorgarPrestamo. 
 *
 *
 */
public function otorgarPrestamoSiCalifica(){

    $colPrestamos = $this->getColeccionPrestamos();

    for ($i=0; $i < count($colPrestamos) ; $i++){ 
        $objPrestamo = $colPrestamos[$i];
        $cuarentaPorciento = (($objPrestamo->getMonto() / $objPrestamo->getCantidad_de_Cuotas()) * 40 ) /100;
        if ($cuarentaPorciento < $objPrestamo->getPersona()->getNeto()) {
            $objPrestamo->otorgarPrestamo();
        }
    }
}

/**Implementar el método informarCuotaPagar(idPrestamo) que recibe por parámetro la identificación del
préstamo, se busca el préstamo en la colección de prestamos y si es encontrado se obtiene la siguiente
cuota a pagar. El método debe retornar la referencia a la cuota. Utilizar para su implementación el método darSiguienteCuotaPagar 
 * @param String $idPrestamo
 * @return Cuota referencia a la siguiente cuota a pagar
 */
public function informarCuotaPagar($idPrestamo){
    $i=0;
    $flag=true;
    $colPrestamos = $this->getColeccionPrestamos();

    do {
        $objPrestamo = $colPrestamos[$i];
        if ($idPrestamo == $objPrestamo->getId()) {
            $objCuota_a_pagar = $objPrestamo->darSiguienteCuotaPagar();
            $flag=false;
        }
        $i++;
    } while ($flag && $i < count($colPrestamos));

return $objCuota_a_pagar;
}










}
?>