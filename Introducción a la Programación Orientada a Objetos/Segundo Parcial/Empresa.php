<?php

class Empresa{

    //atributos  identificacion, nombre y la colección de Viajes que realiza.
    private $identificacion; 
    private $nombre;
    private $colViajes=[];
    
    //constructor
    public function __construct($identificacion, $nombre, $colViajes){
        
        $this->identificacion=$identificacion; 
        $this->nombre=$nombre; 
        $this->colViajes=$colViajes; 
    }

    //toString
    public function __toString(){
        return "identificacion: ".$this->getIdentificacion()." \n".
                "nombre: ".$this->getNombre()." \n".
                "colViajes: ".$this->getColViajes()." \n";
    }

    //Getters and Setters
   
    /**
     * Get the value of identificacion
     */ 
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set the value of identificacion
     */ 
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get the value of colViajes
     */ 
    public function getColViajes()
    {
        return $this->colViajes;
    }

    /**
     * Set the value of colViajes
     */ 
    public function setColViajes($colViajes)
    {
        $this->colViajes = $colViajes;

    }

    
    /**método buscarViaje(codViaje) que dado un código de viaje que se recibe por parámetro, retorna el objeto viaje correspondiente a ese código.
     *@param int $codVIaje
     *@return Viaje 
     */
    public function buscarViaje($codViaje){

        $arrayViajes = $this->getColViajes();
        $objViaje = null;


        for ($i=0 ; $i < count($arrayViajes) ; $i++ ) { 
            
            $numeroViaje = $arrayViajes[$i]->getNumero(); 

            if ($numeroViaje == $codViaje) {
                # guardo el viaje para retornar
                $objViaje = $arrayViajes[$i];
            }
        }
        return $objViaje;
    }

    /**método darCostoViaje(codViaje) que dado un código de viaje retorna el importe correspondiente a ese viaje.
     * @param int $codVIaje
     * @return float importe correspondiente
     */
    public function darCostoViaje($codViaje){

        $objViaje = $this->buscarViaje($codViaje);

        $importe = $objViaje->calculaImporteViaje();

       return $importe;
    }




}
?>