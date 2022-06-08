<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Terminal{

    //atributos  denominación, dirección y la colección de empresas registradas en la terminal.
    private $denominacion; 
    private $direccion;
    private $colEmpresas=[];
    
    //constructor
    public function __construct($denominacion, $direccion, $colEmpresas){
        
        $this->denominacion=$denominacion; 
        $this->direccion=$direccion; 
        $this->colEmpresas=$colEmpresas; 
    }

    //toString
    public function __toString(){
        return "denominacion: ".$this->getDenominacion()." \n".
                "direccion: ".$this->getDireccion()." \n".
                "colEmpresas: ".$this->getColEmpresas()." \n";
    }

    //Getters and Setters
   
    /**
     * Get the value of denominacion
     */ 
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    /**
     * Set the value of denominacion
     */ 
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

    }

    /**
     * Get the value of colEmpresas
     */ 
    public function getColEmpresas()
    {
        return $this->colEmpresas;
    }

    /**
     * Set the value of colEmpresas
     */ 
    public function setColEmpresas($colEmpresas)
    {
        $this->colEmpresas = $colEmpresas;
    }


    /**método darViajeMenorValor() recorre cada una de las empresas vinculadas a la terminal y retorna una colección de objetos de viaje. Cada viaje es el de menor valor dentro de la colección deviajes de esa empresa
     *@return Array coleccion de objetos Viajes
    */
    public function darViajeMenorValor(){
    $arrayEmpresas = $this->getColEmpresas();
    $arrayViajesMenores=[];

        for ($i=0; $i < count($arrayEmpresas); $i++) { 
        $objEmpresa= $arrayEmpresas[$i];
         $colViajesEmpresa=  $objEmpresa->getColViajes();

        $viajeMenor = $this->buscarViajeConMenorImporte($colViajesEmpresa);
        
        $arrayViajesMenores[] = $viajeMenor;
        }
        
        return $arrayViajesMenores;
    }


    /**
     * Este metodo compara cada viaje para para buscar el que tiene menor importey lo retorana
     * @param Array $colViajesEmpresa
     * @return Viaje el viaje de menor importe
     */
    function buscarViajeConMenorImporte($colViajesEmpresa){
        $i=0;
        $viajeMenorImporte= $colViajesEmpresa[$i];
        $menorImporte =  $viajeMenorImporte->calculaImporteViaje();
        $posMenorImporte= $i;


        while ($i< count($colViajesEmpresa)-1) {
            # code...
            $importeSiguiente = $colViajesEmpresa[$i+1]->calculaImporteViaje();

            if ($menorImporte > $importeSiguiente) {
                
                $menorImporte=$importeSiguiente;
                $posMenorImporte = $colViajesEmpresa[$i+1];

            }
            $i++;
        }

        $viajeMenorImporte = $colViajesEmpresa[$posMenorImporte];

        return $viajeMenorImporte;
    }


    


}
?>