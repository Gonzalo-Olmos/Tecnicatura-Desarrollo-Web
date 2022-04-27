<?php
/*Este programa recibe una cierta cantidad de segundos 
  y los transforma a sus respectivas horas minutos y segundos */
/* Entero hora,min,seg,segundos,aux*/

echo "Ingrese una cantidad de Segundos: ";
$segundos = trim(fgets(STDIN));

/*Zona de calculos*/

$horas = (int) ($segundos/3600); 
$aux = ($segundos % 3600);   /**Resto de segundos de las horas */
$min = (int) ($aux/60);        /**Conversion de segundos restantes a minutos */
$seg = $aux % 60;

echo "La cantidad de: ".$segundos." segundos es: ". $horas. "/" .$min. "/". $seg;

