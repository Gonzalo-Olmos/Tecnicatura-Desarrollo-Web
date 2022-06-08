<?php

class Viaje{

    //atributos
//destino, hora de partida, hora de llegada, número, monto base,
//fecha, cantidad de asientos totales, cantidad de asientos disponibles, y una referencia a la persona
//responsable del viaje.


    private $destino; 
    private $horaDePartida;
    private $horaDeLlegada;
    private $numero;
    private $montoBase;
    private $fecha;
    private $cantAsientosTotales;
    private $cantAsientosDisponibles;   
    private $objResponsable;

    //constructor
    public function __construct($destino, $horaDePartida, $horaDeLlegada, $numero, $montoBase, $fecha,  $cantAsientosTotales,  $cantAsientosDisponibles,  $objResponsable){
        
        $this->destino=$destino; 
        $this->horaDePartida=$horaDePartida; 
        $this->horaDeLlegada=$horaDeLlegada; 
        $this->numero=$numero; 
        $this->montoBase=$montoBase;
        $this->fecha=$fecha;
          $this->cantAsientosTotales=$cantAsientosTotales; 
        $this->cantAsientosDisponibles=$cantAsientosDisponibles;
        $this->objResponsable=$objResponsable;
    }

    //toString
    public function __toString(){
        return "destino: ".$this->getDestino()." \n".
                "horaDePartida: ".$this->getHoraDePartida()." \n".
                "horaDeLlegada: ".$this->getHoraDeLlegada()." \n".
                "numero: ".$this->getNumero()." \n".
                "montoBase: ".$this->getMontoBase()." \n".
                "fecha: ".$this->getFecha()." \n".
                "cantAsientosTotales: ".$this->getCantAsientosTotales()." \n".
                "cantAsientosDisponibles: ".$this->getCantAsientosDisponibles()." \n".
                "objResponsable: ".$this->getObjResponsable()." \n";

    }

    /**
     * Get the value of destino
     */ 
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set the value of destino
     */ 
    public function setDestino($destino)
    {
        $this->destino = $destino;

    }

    /**
     * Get the value of horaDePartida
     */ 
    public function getHoraDePartida()
    {
        return $this->horaDePartida;
    }

    /**
     * Set the value of horaDePartida
     *
     */ 
    public function setHoraDePartida($horaDePartida)
    {
        $this->horaDePartida = $horaDePartida;
    
    }

    /**
     * Get the value of horaDeLlegada
     */ 
    public function getHoraDeLlegada()
    {
        return $this->horaDeLlegada;
    }

    /**
     * Set the value of horaDeLlegada

     */ 
    public function setHoraDeLlegada($horaDeLlegada)
    {
        $this->horaDeLlegada = $horaDeLlegada;

    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }


    /**
     * Set the value of numero
    
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

    }

    /**
     * Get the value of montoBase
     */ 
    public function getMontoBase()
    {
        return $this->montoBase;
    }

    /**
     * Set the value of montoBase
    
     */ 
    public function setMontoBase($montoBase)
    {
        $this->montoBase = $montoBase;

    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

    }

    /**
     * Get the value of cantAsientosTotales
     */ 
    public function getCantAsientosTotales()
    {
        return $this->cantAsientosTotales;
    }

    /**
     * Set the value of cantAsientosTotales
     */ 
    public function setCantAsientosTotales($cantAsientosTotales)
    {
        $this->cantAsientosTotales = $cantAsientosTotales;

    }

    /**
     * Get the value of cantAsientosDisponibles
     */ 
    public function getCantAsientosDisponibles()
    {
        return $this->cantAsientosDisponibles;
    }

    /**
     * Set the value of cantAsientosDisponibles
    
     */ 
    public function setCantAsientosDisponibles($cantAsientosDisponibles)
    {
        $this->cantAsientosDisponibles = $cantAsientosDisponibles;

     
    }

    /**
     * Get the value of objResponsable
     */ 
    public function getObjResponsable()
    {
        return $this->objResponsable;
    }

    /**
     * Set the value of objResponsable

     */ 
    public function setObjResponsable($objResponsable)
    {
        $this->objResponsable = $objResponsable;

    }


    /**Metodo que calcula el un importe
     *@return float
     */
    public function calculaImporteViaje(){

        $asientosVendidos= $this->getCantAsientosTotales() - $this->getCantAsientosDisponibles();

        $importe = $this->getMontoBase + ($this->getMontoBase * $asientosVendidos/  $this->getCantAsientosTotales());

        return $importe;
    }



}

?>