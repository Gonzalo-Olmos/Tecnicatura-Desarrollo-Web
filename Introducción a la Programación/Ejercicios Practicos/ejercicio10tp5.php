<?php

/** 
 * Este Módulo recibe por parámetro un número de 4 cifras y encripta dicho número
 * @param int $num
 * @return int 
 */
function encripta (int $num){
/*La función de la variable auxiliar es la de retener las cantidades excedentes
 que queremos despejar para obtener un número más cómodo de trabajar*/
//int $digitoCero,$digitoUno,$digitoDos,$digitoTres,$aux,$numEncriptado

//calcula cada digito del numero//
$digitoTres= ($num%10);
$aux= (int)($num/10);
$digitoDos= ($aux%10);
$aux= (int)($aux/10);
$digitoUno= ($aux%10);
$aux= (int)($aux/10);
$digitoCero= $aux;

//Reemplazar cada digito con el residuo de la division entre//
//la suma del digito mas 7 y 10//
$digitoCero= (($digitoCero+7)%10);
$digitoUno= (($digitoUno+7)%10);
$digitoDos= (($digitoDos+7)%10);
$digitoTres= (($digitoTres+7)%10);

//Intercambio el primer digito por el tercero//
$aux= $digitoCero;
$digitoCero= $digitoDos;
$digitoDos= $aux;

//Intercambio el segundo digito con el cuarto//
$aux= $digitoUno;
$digitoUno= $digitoTres;
$digitoTres= $aux;

$numEncriptado= $digitoCero*1000+$digitoUno*100+$digitoDos*10+$digitoTres;

return $numEncriptado;

}

function desencriptar($numE){
    // int $numOriginal, $dig0, $dig1, $dig2, $dig3
 
     //Calcula cada digito del número
     $dig3 = $numE % 10;
     $aux = (int) ($numE / 10);
     $dig2= $aux % 10;
     $aux = (int) ($aux / 10);
     $dig1 = $aux % 10;
     $aux = (int) ($aux / 10);
     $dig0 = $aux; 
 
    //Reemplazar cada dígito con  El residuo de la división entre (la suma del dígito +3 (equivalente a 10 - 7)) y 10 
    $dig0 = ($dig0 + 3) % 10;
    $dig1 = ($dig1 + 3) % 10;
    $dig2 = ($dig2 + 3) % 10;
    $dig3 = ($dig3 + 3) % 10;
 
   //Intercambie el primer dígito con el tercero 
   $aux = $dig0;
   $dig0 = $dig2;
   $dig2 = $aux;
 
   //Intercambie el segundo dígito con el cuarto
   $aux = $dig1;
   $dig1 = $dig3;
   $dig3 = $aux;
 
   $numOriginal = (($dig0*1000)+($dig1*100)+($dig2*10)+$dig3);
    return $numOriginal;
   }

/**
    * PROGRAMA empresaTelefonica
    * Entero $numero, $numeroEncriptado, $numeroDesencriptado                                    
    */
    echo("Por favor ingrese un numero de 4 dígitos:");
    $numero = trim(fgets(STDIN));
    
    if ($numero> 1000 && $numero< 9999){
        $numeroEncriptado = encripta($numero);
        $numeroDesencriptado = desencriptar($numeroEncriptado);

        echo("El Numero que ingresó tiene un valor encriptado de: ". $numeroEncriptado. " \n");
        echo("El Numero encriptado que ingreso tiene un valor desencriptado de: ".$numeroDesencriptado);    
    }
    else{
        echo("EROR. Por favor ingrese un numero de cuatro digitos:");
    }
    