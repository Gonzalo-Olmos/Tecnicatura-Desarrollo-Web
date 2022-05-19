<?php

include_once("Fecha.php");


//Clase TEST

//Creacion instancia
$objFecha = new Fecha(29,11,1998);

//Mostrar el objeto
echo $objFecha;
echo(" \n ");

//Test metodos

echo($objFecha->fechaAbrebiada()); 
echo(" \n ");
echo($objFecha->fechaExtendida());

echo(" \n ");



$nuevaFecha = Fecha::incremento(4,$objFecha);



echo ("Nueva Fecha incrementada: \n  ");
echo $nuevaFecha;




/* function incremento($numDias, $objetoFecha){
    //Fecha $nuevaFecha
    $nuevaFecha = $objetoFecha;

for ($i=0; $i < $numDias ; $i++) { 
 
    $nuevaFecha->incrementa_un_dia();
}

return $nuevaFecha;
} */


?>