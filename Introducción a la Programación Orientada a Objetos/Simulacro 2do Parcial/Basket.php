<?php

class Basket extends Partido
{
    //atributos propios
    private $cantInfracciones;

    //constructor
    function __construct($objEquipo1, $objEquipo2, $idPartido, $fecha, $cantGolesE1, $cantGolesE2, $cantInfracciones)
    {
        //invoco al construc padre
        parent::__construct($objEquipo1, $objEquipo2,$idPartido, $fecha, $cantGolesE1, $cantGolesE2);
        //agrego el valor del nuevo atributo
        $this->cantInfracciones= $cantInfracciones;
    }

    //ToString
    function __toString()
    {
        $cadena = "\n----Partido Basket---- \n ";
        $cadena .= parent::__toString()." cantInfracciones: ".$this->getCantInfracciones()."\n";
        return $cadena;
    }

    /**
     * Get the value of cantInfracciones
     */ 
    public function getCantInfracciones()
    {
        return $this->cantInfracciones;
    }

    /**
     * Set the value of cantInfracciones
     */ 
    public function setCantInfracciones($cantInfracciones)
    {
        $this->cantInfracciones = $cantInfracciones;
    }
   
    /**
     * Redefinicion del metodo 
     */
    public function coeficientePartido(){

        $coef=parent::coeficientePartido();

        //Al coeficiente base se debe restar 0,75 * la cantidad de infracciones.
        $coefBasket = $coef - (0.75*$this->getCantInfracciones());

        return $coefBasket;  
    }

}
