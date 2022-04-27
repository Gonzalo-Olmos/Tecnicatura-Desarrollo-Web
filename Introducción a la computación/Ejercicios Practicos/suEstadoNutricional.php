<?php
/**
*Este programa calcula el índice de masa corporal 
*en base al peso y altura de una persona
*@param float $masa 
*@param float $estatura
*@return float 
*/
function calculoImc($masa, $estatura){
//float imc 
$imc = ($masa/($estatura*$estatura));
return $imc;
}

/**
 * Este módulo muestra por pantalla el estado nutricional de una persona
 * @param float $iMc
 */
function estadoNutricional($iMc){

if ($iMc < 18.50){
    echo("Estado nutricional: Bajo de peso");
}elseif($iMc >= 18.5 && $iMc <= 24.99){
    echo("Estado nutricional: Normal");
}elseif($iMc >= 25.00 && $iMc <= 29.99){
    echo("Estado nutricional: Sobrepeso");
}elseif($iMc>= 30.00 && $iMc <= 34.99){
    echo("Estado nutricional: Obesidad Leve");
}elseif($iMc <= 35.00 && $iMc <= 39.99){
    echo("Estado nutricional: Obesidad Media");
}
else{
    echo("Estado nutricional: Obesidad Morbida");
}
}
/**Programa Principal suEstadoNutricional
 * Este programa recibe como dato peso y altura de una persona y muestra por pantalla 
 * el estado nutricional -IMC- según la clasificación de la OMS
 */
 //Float $peso, $altura 
echo("Ingrese su Peso:");
 $peso = trim(fgets(STDIN));
echo("Ingrese su altura:");
 $altura = trim(fgets(STDIN));
 
estadoNutricional(calculoImc($peso, $altura));




