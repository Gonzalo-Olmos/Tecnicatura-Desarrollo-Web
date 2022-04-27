<?php
/**Ejercicio 8 
 * sumaNumeros
 * PROGRAMA sumaNumeros

ENTERO numero,suma,n
suma ← 0
ESCRIBIR(“Cuantos nros desea sumar?: ”)
LEER(n)

PARA i = 1 HASTA n+1 PASO 1 HACER

ESCRIBIR(“Ingrese el nro ”, i )
LEER(numero)
suma = suma + numero

FIN PARA
ESCRIBIR(“La suma es: ”, suma)

FIN PROGRAMA 

 */
 echo("cuantos nros Desea sumar?: ");
    $n = trim(fgets(STDIN));
    $suma = 0;
    for ($i=1; $i <= $n ; $i++) { 
        echo("Ingrese el nro ".$i.": ");
        $numero = trim(fgets(STDIN));
        $suma = $suma + $numero;
    }
    echo("La suma es: ".$suma);
