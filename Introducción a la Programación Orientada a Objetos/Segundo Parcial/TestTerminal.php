<?php
include("Terminal.php");
include("Empresa.php");
include("Nacional.php");
include("Internacional.php");
include("Responsable.php");


$objResponsable = new Responsable("Gonzalo", "Olmos", 41193872, "villa regina", "gonza@gmail.com", 2984906136);

$objViajeNacional = new Nacional("El bolson", "15:00", " 17:00", 0001, 30000, 16/9/7, 10, 3, $objResponsable);
$objViajeInternacional = new Internacional("Italia", "15:00", " 17:00", 0001, 30000, 16/9/7, 10, 3, $objResponsable, "blbaa");

$colViajes[] = $objViajeNacional;
$colViajes[] = $objViajeInternacional;

$objEmpresa1 = new Empresa( " 001 "," ViajeFEliz ", $colViajes);
$objEmpresa2 = new Empresa( " 002 "," hola ", $colViajes);

$colEmpresas[] = $objEmpresa1 ;
$colEmpresas[] = $objEmpresa2;

$objTerminal = new Terminal("Denominacion ", " av.123 ", $colEmpresas);



?>