<?php
include "Partido.php";
class Futbol extends Partido{
    //constructor
    function __construct($idPartido, $fecha, $cantGolesE1, $cantGolesE2)
    {
        //invoco al construc padre
        parent::__construct($idPartido, $fecha, $cantGolesE1, $cantGolesE2);
    }

    //ToString
    function __toString()
    {
        $cadena = "-Partido Futbol- \n";
        $cadena .= parent::__toString();
        return $cadena;
    }



}
?>