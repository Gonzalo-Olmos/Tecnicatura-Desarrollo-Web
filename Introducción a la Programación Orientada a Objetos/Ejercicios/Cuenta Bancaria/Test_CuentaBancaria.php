<?php
include_once"CuentaBancaria.php";
include_once"Persona.php";



//Test Con Instancia Persona

$objPersona = new Persona("Gonzalo", "Olmos", "A", 41193872);

$objCuenta = new CuentaBancaria(231123, $objPersona, 400000, 40);

echo $objCuenta;

$objCuenta->actualizarSaldo();
$objCuenta->retirar(250000);

echo $objCuenta;










//Test con numero de Dni 
/* $objCuenta = new CuentaBancaria(231123, 41193872, 400000, 40);

echo $objCuenta;
echo"\n";
//Actualizar saldo
$objCuenta->actualizarSaldo();
echo"\n";
echo $objCuenta;
echo"\n";
//Deposito
$objCuenta->depositar(15000);
echo"\n";
echo $objCuenta;
//Retiro
$cant=400000;
echo"\n Retirando $".$cant."\n";
if ($objCuenta->retirar($cant)){
    echo"\n ---Retiro realizado con Exito--- \n";
}else{
    echo"\n ---No posee Fondos suficientes para el retiro--- \n";
}
echo"\n";
echo $objCuenta;
echo"\n"; */









?>