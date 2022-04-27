<?php
/**
 * Este modulo convierte un horario del dia en segundos y retorna la cantidad de segundos
 * @param int $h
 * @param int $m
 * @param int $s
 * @param String $tipo
 * @return int
 */
function aSegundos($h, $m, $s, $tipo){
    //int $segTotales
 if($tipo == "AM"){
    $h= $h*3600;
    $m=$m*60;
    $segTotales = $h+$m+$s;
 }else{
    $h = $h *60;
    $m = $m*60;
    $segTotales = $h+$m+$s+43200; //43200 son 12 horas en segundos
 }
 return $segTotales;
}

/** 
 *Este modulo recibe por parametro una cantidad de segundos y retorna en formato legible sus respectivas horas, minutos y segundos
 * @param int $segundos
 * @return String 
 */
function formatoHora (int $segundos){
    //int $hora, $min, $seg, $aux
    $hora = (int)($segundos / 3600);
    $aux = $segundos % 3600;
    $min = (int)($aux / 60) ;
    $seg = $aux % 60;
    return("hora".$hora." min: ".$min." seg:".$seg);
    }


/**
 * este modulo recibe por parametro 2 horas expresadas en segundos y retorna verdadero 
 * si la primera es es menor a la segunda o Falso en caso contrario
 * @param int $hora1
 * @param int $hora2
 * @return boolean
 */
function esMenor($hora1, $hora2){
//boolean $esMenor

if($hora1 < $hora2){
    $esMenor = true;
}else{
    $esMenor = false;
}
}

/**
 * Este modulo recibe por parametro dos horas diferentes en segundos y retorna en formato legible la diferencia entre ellos
 * @param int $h1
 * @param int $h2
 * @return String
 */

function difHoras($h1, $h2) {
    //int $difHoras
    $difHoras = ($h1-$h2);
    /* Se invoca el modulo formatoHora para que retorne un sting */
    return formatoHora($difHoras);
}


//** Programa Principal dosHoras */
//$horas, $min, $seg, $tipo, $hora1EnSeg, $hora2EnSeg

echo("Ingrese una cantidad de horas (0 a 12):");
$horas = trim(fgets(STDIN));
echo("Ingrese una cantidad de minutos (0 a 59)");
$min = trim(fgets(STDIN));
echo("Ingrese una cantidad de segundos(0 a 59):");
$seg = trim(fgets(STDIN));
echo("Ingrese un Tipo (AM / PM)");
$tipo = trim(fgets(STDIN));
$hora1EnSeg = aSegundos($horas, $min, $seg, $tipo);

//le pedimos al usuario otra cantidad de horas
echo("Ingrese otra cantidad de horas (0 a 12):");
$horas = trim(fgets(STDIN));
echo("Ingrese otra cantidad de minutos (0 a 59)");
$min = trim(fgets(STDIN));
echo("Ingrese otra cantidad de segundos(0 a 59):");
$seg = trim(fgets(STDIN));
echo("Ingrese otro Tipo (AM / PM)");
$tipo = trim(fgets(STDIN));
$hora2EnSeg = aSegundos($horas, $min, $seg, $tipo);

echo(" Las horas ordenas de mayor a menor son: \n");

if(esMenor($hora1EnSeg, $hora2EnSeg)){
    echo(formatoHora($hora2EnSeg)." Son: ".$hora2EnSeg." seg. \n");
    echo(formatoHora($hora1EnSeg)." Son: ".$hora1EnSeg." seg. \n");
}else{
    echo(formatoHora($hora1EnSeg)." Son: ".$hora1EnSeg." seg.\n");
    echo(formatoHora($hora2EnSeg)." Son: ".$hora2EnSeg." seg.\n");
}

