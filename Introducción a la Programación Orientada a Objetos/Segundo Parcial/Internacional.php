<?php
include("Viaje.php");
class Internacional extends Viaje{ 

//atributos propios 
    private $porcentajeImpuestos; 
    private $documentacionAdicional; //String "si" / "no"

    //constructor
    public function __construct($destino, $horaDePartida, $horaDeLlegada, $numero, $montoBase, $fecha,  $cantAsientosTotales,  $cantAsientosDisponibles,  $objResponsable, $documentacionAdicional){
        
        //invoco al contructor padre
        parent::__construct($destino, $horaDePartida, $horaDeLlegada, $numero, $montoBase, $fecha,  $cantAsientosTotales,  $cantAsientosDisponibles,  $objResponsable);
        //almaceno el atributo propio
        $this->porcentajeImpuestos = 45;
        $this->documentacionAdicional = $documentacionAdicional;
        
    }

    public function __toString(){

        $cadena = parent::__toString();
        $cadena .= "porcentajeImpuestos: ".$this->getporcentajeImpuestos()."\n documentacionAdicional: ".$this->getDocumentacionAdicional();

        return $cadena;
    }

    /**Redefinicion de calculaImporteViaje de la clase padre
     *@return float
     */
    public function calculaImporteViaje(){

        $importe= parent::calculaImporteViaje();

        $importeFinal = ((45 * $importe )/ 100 ) + $importe ;

        return $importeFinal;
    }


    /**
     * Get the value of porcentajeImpuestos
     */ 
    public function getPorcentajeImpuestos()
    {
        return $this->porcentajeImpuestos;
    }

    /**
     * Set the value of porcentajeImpuestos
     */ 
    public function setPorcentajeImpuestos($porcentajeImpuestos)
    {
        $this->porcentajeImpuestos = $porcentajeImpuestos;
    }

    /**
     * Get the value of documentacionAdicional
     */ 
    public function getDocumentacionAdicional()
    {
        return $this->documentacionAdicional;
    }

    /**
     * Set the value of documentacionAdicional
     */ 
    public function setDocumentacionAdicional($documentacionAdicional)
    {
        $this->documentacionAdicional = $documentacionAdicional;
    }
}
?>