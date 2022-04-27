<?php

/*Este modulo recibe por parametro el numero y el tipo de prueba
 * y retorna el puntaje total
 * @param int $num
 * @param string $tipo
 * @return int
 */
function puntaje (int $num, string $tipo){

 // int $puntajeT;

 if ($tipo=="tecnica"){
     $puntajeT= (($num%6)+20);
 }else{
     $puntajeT= (($num%6)+30);
 }
 return $puntajeT;
}

/*Este modulo recibe por parametro el puntaje total y retorna los minutos extras
 *para la prueba del domingo
* @param int $punTotal
 */
function minutosExtras (int $punTotal){
    //int $cantMinutos
    if ($punTotal<21){
        $cantMinutos=3;
    }
    elseif ($punTotal>=21 || $punTotal<=25){
        $cantMinutos=4;
    }
    elseif ($punTotal>=25 || $punTotal<=30){
        $cantMinutos=5;
    }
    else{
        $cantMinutos=6;
    }
    return $cantMinutos;
}

/**
 * PROGRAMA minutosExtras
 * Este programa solicita al usuario el numero de programa y el tipo de prueba
 * y muestra por pantalla los minutos extras
 * Entero $numPrograma, $puntajeTotal, $minExtras
 * String $tipoPrueba
 */
echo "Ingrese el numero de programa:";
$numPrograma= trim(fgets(STDIN));
echo "Ingrese el tipo de prueba:";
$tipoPrueba= trim(fgets(STDIN));

$puntajeTotal= puntaje($numPrograma,$tipoPrueba);

$minExtras= minutosExtras($puntajeTotal);

echo "La cantidad de minutos extras para la prueba del domingo son:". $minExtras;