<?php
/*Este algoritmo calcula el diámetro y el perímetro de un  círculo, la superficie,volumen y la superficie de la esfera a través de un radio r dado */
/*Float $radio, $diametro, $perimetro, $superficie, $volumen, $PI, $supEsfera   */

echo "Ingrese un Radio en cm: ";
$radio =  trim(fgets(STDIN));
$PI = 3.14;

/*Calculos*/
$perimetro = 2*$PI*$radio;
$diametro = 2*$radio;
$superficie = $PI * ($radio * $radio);
$volumenEsfera = 4/3*$PI*($radio * $radio *$radio);
$supEsfera = 4 * $PI * ($radio * $radio);

/*Muestra por pantalla */ 
echo "El perimetro del circulo es de: ". $perimetro. " cm \n";
echo "El diametro del circulo es de: ". $diametro ." cm \n";
echo "La superficie del circulo es de: ". $superficie." cm2 \n";
echo "El volumen de la esfera es de: ".$volumenEsfera." cm3 \n";
echo "La superficie de la esfera es de: ".$supEsfera." cm2 \n";
