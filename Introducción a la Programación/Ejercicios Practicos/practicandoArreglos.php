<?php

$arreglo = [];
/*
$arreglo[0] = ["nombre"=> "Gonzalo", "Apellido"=>"Olmos"];

$arreglo[1] = ["nombre"=> "Alejando", "Apellido"=>"Robledo"];

$arreglo[2] = ["nombre"=> "Maximiliano", "Apellido"=>"León"];

$arreglo[3] = ["nombre"=> "Parece", "Apellido"=>"Quw funciona"];

echo "Agregue uno nuevo: ";
echo "Nombre:  ";
$arreglo[4]["nombre"] = trim(fgets(STDIN));
echo "Apellido:  ";
$arreglo[4]["Apellido"] = trim(fgets(STDIN));
*/

/* Inicializa una estructura de datos con ejemplos de juegos y retorna una coleccion de juegos
 * @param 
 * @return
 */
function cargarJuegos(){
    $coleccionJuegos = [];
    echo"Ingrese los datos los primeros 10 juegos: \n";
    for($i = 0; $i<10; $i++){
        echo"Ingrese el nombre del jugador X: ";
        $coleccionJuegos[$i]["jugadorCruz"] = trim(fgets(STDIN));
        echo"Ingrese el nombre del jugador O: ";
        $coleccionJuegos[$i]["jugadorCirculo"] = trim(fgets(STDIN));
        echo"Ingrese los puntos de X: ";
        $coleccionJuegos[$i]["puntosX"] = trim(fgets(STDIN));
        echo"Ingrese los puntos de O: ";
        $coleccionJuegos[$i]["puntosO"] = trim(fgets(STDIN));
    }
   
    print_r($coleccionJuegos);
 }

 




/** Hay que verificar que pasa si no existe el jugador en la coleccion de juegos */

/**Funcion que retorna el indice del primer juego ganado por un jugador dado
 * @param array $coleccionJuegos
 * @param String $nombreJugador
 * @return int
 */
 function indiceGanador($coleccionJuegos, $nombreJugador){
 //int $indice $noGano, $i  boolean $flag
$i=0;
$flag = true;

do{
 if($coleccionJuegos[$i]["jugadorCruz"] == $nombreJugador){
    if($coleccionJuegos[$i]["puntosCruz"]>$coleccionJuegos[$i]["puntosCirculo"]){
        $indice = $i;
        $flag = false;
    }
 }elseif($coleccionJuegos[$i]["jugadorCirculo"] == $nombreJugador){
     if($coleccionJuegos[$i]["puntosCruz"]<$coleccionJuegos[$i]["puntosCirculo"]){
        $indice = $i;
        $flag = false;
    }
 }else{
    $flag = false;
    $indice = -1; //en caso de que no haya ganado ninguna
 }
 $i++;
}while($flag);

return $indice;
}




// 5) desde el punto de vista del usuario



/** 7) Desde el punto de vista del programador
 *  Modulo que retorna Un arreglo con el resumen de un Jugador Dado
 * @param array $coleccionJuegos
 * @param String $jugador
 * @return array 
 */
function resumenArray($coleccionJuegos, $jugador){

    $resumenJugador=[];

    $resumenJugador = [
    "nombre" => $coleccionJuegos[0][""],
    "juegosGanados" => "", 
    "juegosEmpatados" => "",
    "puntosAcumulados" => "" ];

return $resumenJugador;
}



/** 10) 
 * Modulo que Retorna la cantidad de juegos ganados por un símbolo dado
 * @param $coleccionJuegos
 * @param $simbolo
 * @return int 
 */
function juegosGanadosPorSimbolo($coleccionJuegos, $simbolo){
    //int $ganadosCruz, $ganadosCirculo, $ganados
    $ganadosCruz = 0;
    $ganadosCirculo = 0;

     for($i=0; $i < count($coleccionJuegos); $i++){
        
        if($coleccionJuegos[$i]["puntosCruz"] > $coleccionJuegos[$i]["puntosCirculo"] ){
            $ganadosCruz++;
        }

        if($coleccionJuegos[$i]["puntosCruz"] < $coleccionJuegos[$i]["puntosCirculo"]){
            $ganadosCirculo++;
        }
    }

    if ($simbolo == "x") {
        $ganados = $ganadosCruz;
    }else{
        $ganados = $ganadosCirculo;
    }

return $ganados;
}




/** 4) */


/**Este modulo solicita al usuario como dato un simbolo y muestra por pantalla_
 * _el porcentaje de los juegos ganados de dicho simbolo.
 * @param array $coleccionJuegos
 */
function mostrarPorcentajeGanados($coleccionJuegos){
    //int $totalJuegosGanados, $acumJuegosGanadosO, $acumJuegosGanadosX
    //float $porcentaje
    //String $simbolo 

    echo "Ingrese un simbolo:";
    $simbolo= trim(fgets(STDIN));

    //inicializacion de acumuladores
    $totalJuegosGanados = 0;
    $acumJuegosGanadosO = 0;
    $acumJuegosGanadosX = 0;

    for($i= 0; $i < count($coleccionJuegos); $i++) {
     
    if($coleccionJuegos[$i]["puntosCruz"]>$coleccionJuegos[$i]["puntosCirculo"]){
            $acumJuegosGanadosX++;
            $totalJuegosGanados++;       
    }elseif($coleccionJuegos[$i]["puntosCruz"]<$coleccionJuegos[$i]["puntosCirculo"]){
            $acumJuegosGanadosO++;
            $totalJuegosGanados++;
    }
    }
    if($simbolo == "x"){
        $porcentaje = $acumJuegosGanadosX * 100 / $totalJuegosGanados;
       echo  "El porcentaje de los juegos ganados por ". $simbolo. "es: ". $porcentaje;

    }else{
        $porcentaje = $acumJuegosGanadosO * 100 / $totalJuegosGanados;
        echo "El porcentaje de los juegos ganados por". $simbolo. "es: ". $porcentaje;
    } 
}




/**Este modulo recorre el arreglo parcialmente para verificar si existe el nombre de un jugador y retorna el nombre si existe
*@param array $coleccionJuegos
*@param String $nombre
*@return String
*/
function pideYverificaJugador($coleccionJuegos){

    $i = 0;

    echo"Ingrese el nombre de un Jugador: ";
    //convierto el nobmre a mayusculas
    $nombre= strtoupper(trim(fgets(STDIN)));

    //si NO encuentra al jugador, vuelve a pedir que ingrese otro nombre
    while(!(strtoupper($coleccionJuegos[$i]["jugadorCruz"])==$nombre || strtoupper($coleccionJuegos[$i]["jugadorCirculo"])==$nombre ) && $i < count($coleccionJuegos) ){
          
        echo"Este jugador No se encuentra en la colección de juegos, Por favor ingrese otro: \n ";
        $nombre= strtoupper(trim(fgets(STDIN)));
        $i++;
    }
    return $nombre;
    }

    




    /**Este modulo recorre el arreglo parcialmente para verificar si existe el nombre de un jugador 
*@param array $coleccionJuegos
*@param String $nombre
*@return boolean
*/
function verificaJugador($coleccionJuegos,$nombre){

    $i = 0;
    $existe = false;
    echo"Ingrese el nombre de un Jugador: ";
    //convierto el nobmre a mayusculas
    $nombre= strtoupper(trim(fgets(STDIN)));

    do{
    while( ($existe == false) && $i < count($coleccionJuegos) ){
          if( $coleccionJuegos[$i]["jugadorCruz"]==$nombre || $coleccionJuegos[$i]["jugadorCirculo"]==$nombre ) {
        $existe = true;
          }else{
        $existe = false;
    }
    $i++;
    }
    //si termina de recorrer el arreglo y no lo encuentra entonces 
    if($existe == false){
        echo"Este jugador No se encuentra en la colección de juegos, Por favor ingrese otro: \n ";
        $nombre= strtoupper(trim(fgets(STDIN)));
        $i=0;
    }
    }while($existe);

    return $nombre;
    }





/**
*Esta funcion recibe como parametro un arreglo multidimiensional carga 10 juegos como *ejemplo con el nombre de cada jugador y sus respectivos puntajes
*@param array $coleccionJuegos
*@return array
*/






function mostrarJuego($coleccionJuegos, $numeroJuego)
{
    // string $resultado,$nombreX, $nombreO
    // int $puntosCirculo, $puntosO
    // redefino variables para mas legibilidad
    $nombreX = strtoupper($coleccionJuegos[$numeroJuego]["jugadorCruz"]); //convierto a mayusculas
    $nombreO = strtoupper($coleccionJuegos[$numeroJuego]["jugadorCirculo"]); //convierto a mayusculas
    $puntosX = $coleccionJuegos[$numeroJuego]["puntosCruz"];
    $puntosO = $coleccionJuegos[$numeroJuego]["puntosCirculo"];

    // si son iguales es empate, sino asigno ganador a $resultado
    if ($puntosX == $puntosO) {
        $resultado = "(empate)";
    } elseif ($puntosX > $puntosO) {
        $resultado = "(ganó X)";
    } else {
        $resultado = "(ganó O)";
    }
    // imprimo el resultado del juego
    echo "****************************\n";
    echo "Juego TATETI: " . $numeroJuego . " " . $resultado . "\n";
    echo "Jugador X: " . $nombreX . " obtuvo " . $puntosX . "\n";
    echo "Jugador O: " . $nombreO . " obtuvo " . $puntosO . "\n";
    echo "****************************";
}



