<?php

/**
 * Este módulo calcula el puntaje de un participante dependiendo el número de prueba y su tipo
 * @param int $numPrueba
 * @param String $tipo
 * @return int
 */
function calcularPuntaje($numPrueba, $tipo){
    //int $puntaje

    if ($tipo == "Tecnica"){
        $puntaje = ($numPrueba%6) +20;
    }else{
        $puntaje = ($numPrueba%6) +30;
    }
    return $puntaje;
}

/**
 * Este módulo recibe por parámetro un puntaje y retorna el cálculo de los minutos extras
 * @param int $puntaje
 * @return int
 */
function calcularMinutosExtras($puntaje){
//int $minExtras

if($puntaje < 21){
    $minExtras = 3;
}elseif($puntaje >= 21 && $puntaje < 25){
    $minExtras = 4;
}elseif($puntaje >= 25 && $puntaje < 31){
    $minExtras = 5;
}else{
    $minExtras = 6;
}
return $minExtras;
}

/**
 * Programa Principal concursoBakeOff
 * Este programa principal muestra por pantalla los minutos extras de un participante, pidiendo al mismo,  número de prueba y tipo de prueba 
 * Declaración variables:
 * int $minutosExtras, $numeroPrueba
 * String $tipoPrueba
 */

echo("Tipo de prueba: ");
$tipoPrueba = trim(fgets(STDIN));
echo("Numero de prueba: ");
$numeroPrueba = trim(fgets(STDIN));

//Invocacion a los modulos para calcular los minutos extras
$minutosExtras = calcularMinutosExtras(calcularPuntaje($numeroPrueba, $tipoPrueba));
//Muesrta resultado por pantalla
echo("Los minutos Extras ganados son: ".$minutosExtras);



