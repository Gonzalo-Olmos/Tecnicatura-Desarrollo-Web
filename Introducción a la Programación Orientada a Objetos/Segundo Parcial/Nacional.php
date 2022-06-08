<?php
include("Viaje.php");

class Nacional extends Viaje{

//atributos propios
    private $porcentajeDescuento; 

    //constructor
    public function __construct($destino, $horaDePartida, $horaDeLlegada, $numero, $montoBase, $fecha,  $cantAsientosTotales,  $cantAsientosDisponibles,  $objResponsable){
        
        //invoco al contructor padre
        parent::__construct($destino, $horaDePartida, $horaDeLlegada, $numero, $montoBase, $fecha,  $cantAsientosTotales,  $cantAsientosDisponibles,  $objResponsable);
        //almaceno el atributo propio
        $this->porcentajeDescuento = 10;
        
    }

    public function __toString(){

        $cadena = parent::__toString();
        $cadena .= "porcentajeDescuento: ".$this->getPorcentajeDescuento();

        return $cadena;
    }

    /**Redefinicion de calculaImporteViaje de la clase padre
     *@return float
     */
    public function calculaImporteViaje(){

        $importe= parent::calculaImporteViaje();

        $importeFinal = ((10* $importe )/ 100 ) - $importe ;

        return $importeFinal;
    }


    /**
     * Get the value of porcentajeDescuento
     */ 
    public function getPorcentajeDescuento()
    {
        return $this->porcentajeDescuento;
    }

    /**
     * Set the value of porcentajeDescuento

     */ 
    public function setPorcentajeDescuento($porcentajeDescuento)
    {
        $this->porcentajeDescuento = $porcentajeDescuento;
    }
}
?>