<?php
include_once("Persona.php");

class Cliente extends Persona
{

    //atributos  (Nro. de Cliente, DNI, Nombre y Apellido)
    private $nroCliente;

    //constructor de Cliente
    public function __construct($nombre, $apellido, $nroDni, $nroCliente)
    {

        //llamo al consuctor de Persona
        parent::__construct($nombre, $apellido, $nroDni);

        //agregramos el atributo adicional
        $this->nroCliente = $nroCliente;
    }

    //get and set
    /**
     * Get the value of nroCliente
     */
    public function getNroCliente()
    {
        return $this->nroCliente;
    }

    /**
     * Set the value of nroCliente
     *
     */
    public function setNroCliente($nroCliente)
    {
        $this->nroCliente = $nroCliente;
    }


    //metodo Tostring
    public function __toString()
    {

        $cadena = parent::__toString();

        $cadena .= "  Numero De Cliente: " . $this->getNroCliente() . "\n";

        return $cadena;
    }
}
