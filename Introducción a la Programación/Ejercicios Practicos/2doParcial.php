<?php 
/**
* Este programa Cuenta las palabras ingresadas que son iguales 
* a una determinada palabra(palabraX)
*/

/**Declaración de variables 
*String $palabraX, $palabra
*int $cantPalabras, $palabrasCoincidentes, $i
*/

//inicialización
$palabrasCoincidentes = 0;

//Proceso
echo(" PalabraX: ");
$palabraX = trim(fgets(STDIN));
echo("Cantidad de Palabras: ");
$cantPalabras = trim(fgets(STDIN));

//echo("");
for ($i=0; $i < $cantPalabras ; $i++) { 
   $palabra = trim(fgets(STDIN));
   if($palabra == $palabraX){
        $palabrasCoincidentes++;
   }
}

if($cantPalabras == 0){
    echo("No hay secuencias de palabras para analizar");
}else{
    echo("Las palabras ingresadas que coinciden con la PalabraX son: ". $palabrasCoincidentes);
}

