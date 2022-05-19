<?php
include_once("Calculadora.php");

//Clase TEST

//Crea una instancia de la clase CALCULADORA
$objCalculadora = new Calculadora(4, 6);

echo $objCalculadora;

echo (" \n Suma: ");
echo $objCalculadora->suma();


echo (" \n Resta: ");
echo $objCalculadora->resta();


echo (" \n Multiplicación: ");
echo $objCalculadora->multiplicar();

echo (" \n División: ");
echo $objCalculadora->dividir();

?>




































