
<?php
/*Este programa recibe como dato un número de 4 cifras y encripta dicho número reemplazando*/
/*Entero num, digitoCero, digitoUno, digitoDos, digitoTres, aux,numEncriptado*/
/*La función de la variable auxiliar es la de retener las cantidades excedentes que queremos despejar para obtener un número más cómodo de trabajar*/

echo("Ingrese un número de cuatro digitos:");
$num = trim(fgets(STDIN));

/*Calcula cada dígito del número */
$digitoTres = $num % 10;
$aux = (int) ($num/10);
$digitoDos = $aux % 10;
$aux = (int) ($aux/10);
$digitoUno = $aux%10;
$aux = (int) ($aux/10);
$digitoCero = $aux;

/*Reemplazar cada dígito con  El residuo de la división entre (la suma del dígito +7) y 10 */
$digitoCero = ($digitoCero + 7) % 10;
$digitoUno = ($digitoUno + 7) % 10;
$digitoDos = ($digitoDos + 7) % 10;
$digitoTres = ($digitoTres + 7) % 10;

/*Intercambie el primer dígito con el tercero */
$aux = $digitoCero;
$digitoCero = $digitoDos;
$digitoDos = $aux;

/*Intercambie el segundo dígito con el cuarto*/
$aux = $digitoUno;
$digitoUno = $digitoTres;
$digitoTres = $aux;

/** Con en equipo encontramos un caso particular en el cual quedaba un cero a la izquierda(está la traza en el doc)
 * La solucion del problema sería hacer una concatenación. En el codigo decidimos respetar la consigna*/

$numEncriptado = (($digitoCero*1000)+($digitoUno*100)+($digitoDos*10)+$digitoTres);

echo("El numero encriptado es: ". $numEncriptado);
