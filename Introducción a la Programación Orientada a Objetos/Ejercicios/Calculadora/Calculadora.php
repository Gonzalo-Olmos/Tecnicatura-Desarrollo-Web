<?php

/*
*Clase Calculadora
*Olmos gonzalo
*/

class Calculadora{

//Atributos
private $numeroA;
private $numeroB;

//Contructor
public function __construct($num1 , $num2){
    $this->numeroA = $num1;
    $this->numeroB = $num2;

}

//Setters
public function setNumeroA($nuevoNum){
    $this->numeroA = $nuevoNum;
}

public function setNumeroB($nuevoNum){
    $this->numeroB = $nuevoNum;
}

//Getters
public function getNumeroA(){
    return $this->numeroA;
}

public function getNumeroB(){
    return $this->numeroB;
}

//toString
public function __toString(){
    return "\n numero A: " .$this->getNumeroA()." \n numero B: " .$this->getNumeroB();
}

//Metodos del Tipo
/**Funcion Suma
 * @return int
 */
public function suma(){
 $resultado = $this->getNumeroA() + $this->getNumeroB();
return $resultado;
}


//resta
public function resta(){
    $resultado = $this->getNumeroA() - $this->getNumeroB();
    return $resultado;
   }

//multiplicar
public function multiplicar(){
    $resultado = $this->getNumeroA() * $this->getNumeroB();
    return $resultado;
   }

//dividir
public function dividir(){
    $resultado = $this->getNumeroA() / $this->getNumeroB();  
    return $resultado;
   }

}

