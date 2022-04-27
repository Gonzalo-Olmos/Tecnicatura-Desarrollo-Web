<?php

/** 
 * Calcula recibe como parametro tres coeficientes y retorna cálculo del  discriminante
 * @param double $a
 * @param double $b
 * @param double $c
 * @return double
 */

function calcularDiscriminante($a,$b,$c){
//double $valorDiscriminante
    $valorDiscriminante=  ($b*$b)-4*$a*$c; 

}

/**Este programa Calcula raices de una funcion cuadratica con la formula bhaskara */
/**Double $cuad, $lineal, $ind, $discriminante, $xUno, $xDos */

echo("Ingrese los coeficientes cuadrático, lineal e independiente");
$cuad = trim(fgets(STDIN));
$lineal = trim(fgets(STDIN));
$ind = trim(fgets(STDIN));

$discriminante = calcularDiscriminante($cuad, $lineal, $ind);

    if($discriminante = 0){
        echo("Las raíces no son dobles");
        $xUno = (-$lineal + sqrt($discriminante))/(2*$cuad);
        echo("Las Raíz es: ".$xUno);
    }elseif($discriminante > 0){
        $xUno = (-$lineal + sqrt($discriminante))/(2*$cuad);
        $xDos = (-$lineal - sqrt($discriminante))/(2*$cuad);
        echo("Las raices son: x1= ".$xUno. " y x2= ".$xDos);
    }else{
        echo("No es posible Calcular las raices"); 
    }
    