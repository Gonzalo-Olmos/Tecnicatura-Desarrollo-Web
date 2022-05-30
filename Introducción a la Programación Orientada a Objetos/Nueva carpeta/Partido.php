<?php
class Partido
{

    //atributos
    private $idPartido;
    private $fecha;
    private $cantGolesE1;
    private $cantGolesE2;
    private $objEquipo1;
    private $objEquipo2;


    //constructor
    function __construct($objEquipo1, $objEquipo2, $idPartido, $fecha, $cantGolesE1, $cantGolesE2)
    {
        $this->objEquipo1 = $objEquipo1;
        $this->objEquipo2 = $objEquipo2;
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
            "  cantGolesE2: " . $this->getCantGolesE2() . "\n". 
            "  --- Equipo 1 --- " . $this->getObjEquipo1(). "\n". 
            "--- --- --- ". "\n".
            "  --- Equipo 2 --- " . $this->getObjEquipo2(). "\n". 
            "--- --- --- ". "\n";

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

    /**
     * Get the value of objEquipo1
     */ 
    public function getObjEquipo1()
    {
        return $this->objEquipo1;
    }

    /**
     * Set the value of objEquipo1
     */ 
    public function setObjEquipo1($objEquipo1)
    {
        $this->objEquipo1 = $objEquipo1;
    }

    /**
     * Get the value of objEquipo2
     */ 
    public function getObjEquipo2()
    {
        return $this->objEquipo2;
    }

    /**
     * Set the value of objEquipo2
     */ 
    public function setObjEquipo2($objEquipo2)
    {
        $this->objEquipo2 = $objEquipo2;
    }

 
    /** Implementar el método coeficientePartido() en la clase Partido el cual retorna el valor obtenido por el
     *coeficiente base, multiplicado por la cantidad de goles y la cantidad de jugadores. Redefinir dicho método
     *según corresponda 
     *@return Float
    */
    public function coeficientePartido(){

        $objEquipo1 = $this->getObjEquipo1();
        $objEquipo2 = $this->getObjEquipo2();

        $cantJugadores = $objEquipo1->getCantJugadores() + $objEquipo2->getCantJugadores() ;

        $coef = 0.5 + ($this->getCantGolesE1() + $this->getCantGolesE2()) * $cantJugadores; 

        return $coef;
    }

}



