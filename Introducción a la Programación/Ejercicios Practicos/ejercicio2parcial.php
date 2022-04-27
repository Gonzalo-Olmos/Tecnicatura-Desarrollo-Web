<?php
/**
 * Este modulo acepta o rechaza maletas de viaje dependiendo de sus dimensiones
 * @param float $alto
 * @param float $ancho
 * @param float $largo
 * @param float $peso
 * @return boolean
 */
function aceptaMaletas($alto, $ancho, $largo, $peso){
//boolean $resultado

if($alto < 40.5 && $ancho<= 30 && $largo <= 15 && $peso<=3.1){
    $resultado = true;
}else{
    $resultado = false;
}
return $resultado;
}