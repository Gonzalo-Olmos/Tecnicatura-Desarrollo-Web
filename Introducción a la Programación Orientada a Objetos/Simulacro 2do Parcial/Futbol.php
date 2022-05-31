<?php

class Futbol extends Partido{
    //constructor
    function __construct($objEquipo1, $objEquipo2, $idPartido, $fecha, $cantGolesE1, $cantGolesE2)
    {
        //invoco al construc padre
        parent::__construct($objEquipo1, $objEquipo2, $idPartido, $fecha, $cantGolesE1, $cantGolesE2);
    }

    //ToString
    function __toString()
    {
        $cadena = "\n----Partido Futbol---- \n";
        $cadena .= parent::__toString();
        return $cadena;
    }

     /**
     * Redefinicion del metodo 
     */
    public function coeficientePartido(){

           $objEquipo1 = $this->getObjEquipo1();

           $categoria =  $objEquipo1->getObjCategoria(); //no verifico que la categoria sea igual, porque eso se verifica cuando se crea un partido

           if ($categoria == "menores") {
            $coefCat = 0.11;
           }elseif ($categoria == "juveniles") {
            $coefCat = 0.17;
           }else {
            $coefCat = 0.23;
           }

           $coef=parent::coeficientePartido();

           $coefFutbol = $coef + ($coef*$coefCat);

           return $coefFutbol;  
       }

}
?>