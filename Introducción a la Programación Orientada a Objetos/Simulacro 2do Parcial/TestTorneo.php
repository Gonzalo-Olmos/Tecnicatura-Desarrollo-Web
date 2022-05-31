<?php
include"Torneo.php";
include"Equipo.php";
include"Categoria.php";
include"Partido.php";
include"Basket.php";
include"Futbol.php";


//1. Crear un objeto de la clase Torneo donde el importe base del premio es de: 100.000 y la colección de partidos tiene los siguientes objetos:

//categorias
$objCatMayores= new Categoria(1, "mayores");
$objCatJuveniles= new Categoria(1, "juveniles");
$objCatMenores= new Categoria(1, "menores");

//equipos
$objE1 = new Equipo("mezcalitos", "Don Juan", 5, $objCatMayores);
$objE2 = new Equipo("chiguaguas", "ricardo", 5, $objCatMayores);
$objE3 = new Equipo("pepepe", "mario", 5, $objCatMayores);
$objE4 = new Equipo("ayahuascas", "marcelo", 5, $objCatJuveniles);
$objE5 = new Equipo("real modrid", "vanesa", 5, $objCatJuveniles);
$objE6 = new Equipo("zapallitos verdes", "juan", 5, $objCatMenores);
$objE7 = new Equipo("Tu morenita", "roberto", 5, $objCatMayores);
$objE8 = new Equipo("dos por dos", "juana", 5, $objCatMayores);
$objE9 = new Equipo("tijuana", "alejandra", 5, $objCatMayores);
$objE10 = new Equipo("team goku", "diaz", 5, $objCatJuveniles);
$objE11 = new Equipo("al abismo", "agustin", 5, $objCatMayores);
$objE12 = new Equipo("sobre el horizonte", "veronica", 5, $objCatJuveniles);

//partidos
$objPart1 = new Basket($objE7 ,$objE8, 001,'2020-10-10',80,120,75);
$objPart2 = new Basket($objE9 ,$objE10,002,'2020-10-25',81,110,70);
$objPart3 = new Basket($objE11 ,$objE12,003,'2020-11-25',115,85,110);
$objPart4 = new Futbol($objE1 ,$objE2,004,'2020-10-25',3,2);
$objPart5 = new Futbol($objE3 ,$objE4,005,'2020-11-13',0,1);
$objPart6 = new Futbol($objE5 ,$objE6,006,'2020-11-30',2,3);

$colPartidos=[$objPart1, $objPart2, $objPart3, $objPart4, $objPart5, $objPart6];

    $objTorneo = new Torneo($colPartidos, 100000);

/* 2 Invocar al método ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipo) donde OBJEquipo1 y
OBJEquipo2 son objE7 y objE11 respectivamente. La fecha es 10-11-20 y el tipo de partido es
basquetbol. Visualice el resultado. */

$objTorneo->ingresarPartido($objE7, $objE11, "10-11-20", "basket");

//echo $objTorneo;

//3. Invocar al método darGanadores(‘basquet’) y visualizar el resultado
$arrayGanadores = $objTorneo->darGanadores("basket");
echo "\n Ganadores Basket \n";
echo implode($arrayGanadores);

//4. Invocar al método darGanadores(‘futbol’) y visualizar el resultado.
$arrayGanadores = $objTorneo->darGanadores("futbol");
echo "\n Ganadores Futbol \n";
echo implode($arrayGanadores);

//5. Invocar al método calcularPremioPartido con cada uno de los partidos creados en el punto 1
$arrayPremio = $objTorneo->calcularPremioPartido($colPartidos);

echo print_r($arrayPremio);

















?>