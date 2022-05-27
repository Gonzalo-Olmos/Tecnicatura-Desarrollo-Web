<?php

class CuentaCorriente extends Cuenta{


    //atributos propios de la cuenta corriente
    private $montoMaxGiro;
    
    
    //constructor
    public function __construct($numCuenta, $saldoActual, $objDueño, $montoMaxGiro)
    {
        //invocamos al contructor de Cuenta
        parent::__construct($numCuenta, $saldoActual, $objDueño);
        //agregamos el atributo 
        $this->montoMaxGiro = $montoMaxGiro;

    }

    
    /**
     * Get the value of montoMaxGiro
     */ 
    public function getMontoMaxGiro()
    {
        return $this->montoMaxGiro;
    }

    /**
     * Set the value of montoMaxGiro
     *
     * @return  self
     */ 
    public function setMontoMaxGiro($montoMaxGiro)
    {
        $this->montoMaxGiro = $montoMaxGiro;

        return $this;
    }

    public function __toString()
    {
        $cadena = parent::__toString();
        $cadena.= "\n Monto Maximo de Giro: ".$this->getMontoMaxGiro();

        return $cadena;
    }
  
    

}