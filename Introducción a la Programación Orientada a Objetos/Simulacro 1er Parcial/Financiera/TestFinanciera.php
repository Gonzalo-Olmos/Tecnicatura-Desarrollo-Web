<?php
include_once"Financiera.php";
include_once"Prestamo.php";
include_once"Cuota.php";
include_once"Persona.php";


//1. Se crea un objeto Financiera con la siguiente información: denominación= Money, dirección = “Av. Arg1234 ”
$objFinanciera = new Financiera("Money", "Av. Arg1234");

//2. Se crea 3 objetos Prestamos y creo 3 objetos Persona
$objPersona1 = new Persona("Pepe" , "Florez", "Bs As 12" , "dir@mail.com" , 299444567, 40000);
$objPersona2 = new Persona("Luis" , "Suarez", "Bs As 123" , "dir@mail.com" , 2994455, 4000);
$objPersona3 = new Persona("Luis" , "Suarez", "Bs As 123" , "dir@mail.com" , 2994455, 4000);

$objPrestamo1 = new Prestamo(1, 50000, 5, 0.1, $objPersona1 );
$objPrestamo2 = new Prestamo(2, 10000, 4, 0.1, $objPersona2 );
$objPrestamo3 = new Prestamo(3, 10000, 2, 0.1, $objPersona3 );

//3. Invocar al método incorporarPrestamo de la Clase Financiera con cada uno de los prestamos creadosen el inciso anterior
$objFinanciera->incorporarPrestamo($objPrestamo1);
$objFinanciera->incorporarPrestamo($objPrestamo2);
$objFinanciera->incorporarPrestamo($objPrestamo3);

//4. Realizar un echo del objeto Financiera creado en 1).
echo $objFinanciera;

//5. Invocar al método otorgarPrestamoSiCalifica de la Clase Financiera.
$objFinanciera->otorgarPrestamoSiCalifica();

//6. Realizar un echo del objeto Financiera creado en 1).
echo $objFinanciera;

//7. Invocar al método informarCuotaPagar(2) de la Clase Financiera y almacenar el valor en una variable $objCuota
$objCuota = $objFinanciera->informarCuotaPagar(2);
//8. Realizar un echo de la variable obtenida en el inciso anterior.
echo $objCuota;

//9. Invocar al método darMontoFinalCuota con el objeto obtenido en el inciso 7 y visualizar el resultado obtenido
echo "   Monto Final Cuota: ".$objCuota->darMontoFinalCuota();

//10. Invocar al método setCancelada(true) con el objeto obtenido en el inciso 7
$objCuota->setCancelada(true);

//11. Invocar al método informarCuotaPagar(2) de la Clase Financiera y almacenar el valor en una variable $objCuota.
$objCuota2 = $objFinanciera->informarCuotaPagar(2);
//12. Realizar un echo de la variable obtenida en el inciso anterior
echo $objCuota2;
echo $objCuota;






?>