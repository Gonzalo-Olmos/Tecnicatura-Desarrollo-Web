<?php

class CajaDeAhorro extends Cuenta
{

    //contructor
    public function __construct($numCuenta, $saldoActual, $objDueño)
    {
        //llamo al constructor de la clase Cuenta
        parent::__construct($numCuenta, $saldoActual, $objDueño);
    }

    //toString
    public function __toString()
    {
        return parent::__toString();
    }
}
