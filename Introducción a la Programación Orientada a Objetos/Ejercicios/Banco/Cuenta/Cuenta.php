<?php

class Cuenta
{


    //atributos
    private $numCuenta;
    private $saldoActual;
    private $objDueño; //Seria una instancia de la clase Cliente

    //constructor
    public function __construct($numCuenta, $saldoActual, $objDueño)
    {
        $this->numCuenta = $numCuenta;
        $this->saldoActual = $saldoActual;
        $this->objDueño = $objDueño;
    }

    //getters y setters

    /**
     * Get the value of numCuenta
     */
    public function getNumCuenta()
    {
        return $this->numCuenta;
    }

    /**
     * Set the value of numCuenta
     */
    public function setNumCuenta($numCuenta)
    {
        $this->numCuenta = $numCuenta;
    }

    /**
     * Get the value of saldoActual
     */
    public function getSaldoActual()
    {
        return $this->saldoActual;
    }

    /**
     * Set the value of saldoActual
     *
     */
    public function setSaldoActual($saldoActual)
    {
        $this->saldoActual = $saldoActual;
    }

    /**
     * Get the value of objDueño
     */
    public function getObjDueño()
    {
        return $this->objDueño;
    }

    /**
     * Set the value of objDueño
     *
     */
    public function setObjDueño($objDueño)
    {
        $this->objDueño = $objDueño;
    }

    //Metodo toString
    public function __toString()
    {
        return  "\n Numero Cuenta: " . $this->getNumCuenta() .
            "\n Saldo Actual : " . $this->getSaldoActual() .
            "\n Datos de Dueño:\n" . $this->getObjDueño();
    }

    //metodos de Cuenta

    /**
     * Metodo que retorna el saldo de la cuenta
     * @return float $saldoActual
     */
    public function saldoCuenta(): float
    {
        return $this->getSaldoActual();
    }

    /**
     * metodo que permite realizar un depósito a la cuenta, una cantidad “monto” de dinero.
     * @param float $monto
     */
    public function realizarDeposito($monto)
    {
        $deposito = $this->getSaldoActual() + $monto;

        $this->setSaldoActual($deposito);
    }


    /**
     * metodo que permite realizar un retiro de la cuenta por una cantidad “monto” de dinero
     * @param float $monto
     */
    public function realizarRetiro($monto)
    {
        $retiro = $this->getSaldoActual() - $monto;
        $this->setSaldoActual($retiro);
    }

    









}
