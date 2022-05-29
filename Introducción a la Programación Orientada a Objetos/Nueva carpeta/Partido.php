<?php
class Partido
{

    //atributos
    private $idPartido;
    private $fecha;
    private $cantGolesE1;
    private $cantGolesE2;

    //constructor
    function __construct($idPartido, $fecha, $cantGolesE1, $cantGolesE2)
    {
        $this->idPartido = $idPartido;
        $this->fecha = $fecha;
        $this->cantGolesE1 = $cantGolesE1;
        $this->cantGolesE2 = $cantGolesE2;
    }

    //ToString
    function __toString()
    {
        return
            "  idPartido: " . $this->getIdPartido() . "\n" .
            "  fecha: " . $this->getFecha() . "\n" .
            "  cantGolesE1: " . $this->getCantGolesE1() . "\n". 
            "  cantGolesE2: " . $this->getCantGolesE2() . "\n";
    }

    //Setters And Getters

    /**
     * Get the value of idPartido
     */
    public function getIdPartido()
    {
        return $this->idPartido;
    }

    /**
     * Set the value of idPartido
     */
    public function setIdPartido($idPartido)
    {
        $this->idPartido = $idPartido;
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
     * Get the value of cantGolesE1
     */
    public function getCantGolesE1()
    {
        return $this->cantGolesE1;
    }

    /**
     * Set the value of cantGolesE1
     */
    public function setCantGolesE1($cantGolesE1)
    {
        $this->cantGolesE1 = $cantGolesE1;
    }

    /**
     * Get the value of cantGolesE2
     */
    public function getCantGolesE2()
    {
        return $this->cantGolesE2;
    }

    /**
     * Set the value of cantGolesE2
     */
    public function setCantGolesE2($cantGolesE2)
    {
        $this->cantGolesE2 = $cantGolesE2;
    }

}
