<?php
/** Modulo esNroElegido2
 * @param int $num
 * @return boolean  
 */
function esNroElegido2($num){
// int $umbral, $i
// boolean $bandera  

$umbral = ((int)($num/2))+1;
$bandera = true;
$i = 2;

while($bandera && $i<$umbral){
    $bandera = !(($num % $i)== 0);
    $i = $i++;
}
return $bandera;
}



/** Modulo sumaElegidosMenores
 * Este modulo suma los numeros primos menores al numero ingresado por el usuario
 * @param int $num
 * @return int
 */
function sumaElegidosMenores($num){
    //int $acumSumaPrimos

    $acumSumaPrimos = 0;

    for ($i=2; $i <= $num ; $i++) { 
        if(esNroElegido2($i)){
            $acumSumaPrimos = $acumSumaPrimos + $i;
        }
        
    }
    return $acumSumaPrimos;
}


//principal
echo("Ingrese un numero: ");
$numero = trim(fgets(STDIN));
 $resultado = esNroElegido2($numero) ;
echo($resultado);

echo(" la suma es:  ".sumaElegidosMenores($numero));