<?php
include_once("Banco.php");
include_once("Cliente.php");
include_once("CajaDeAhorro.php");
include_once("CuentaCorriente.php");


//creacion de clientes
$objCliente1= new Cliente("Gonzalo", "Olmos", 41193872, 1123);
$objCliente2= new Cliente("Paula", "Gutierres", 3515131, 0001);
$objCliente3= new Cliente("Alejandro", "Robledo", 3993272, 0002);
$objCliente4= new Cliente("Fabian", "Muñoz", 40193472, 0003);
$objCliente5= new Cliente("Ricardo", "Mollo", 36193832, 0004);
$objCliente6= new Cliente("Beatriz", "Morela", 3493872, 0005);

//coleccion de clientes
$colClientes[0]= $objCliente1;
$colClientes[1]= $objCliente2;
$colClientes[2]= $objCliente3;
$colClientes[3]= $objCliente4;
$colClientes[4]= $objCliente5;
$colClientes[5]= $objCliente6;


//creacion coleccion de cuenta corriente
$colCuentaCorriente[0]= new CuentaCorriente(0011, 2000000, $objCliente1, 30000);
$colCuentaCorriente[1]= new CuentaCorriente(0022, 1000000, $objCliente2, 30000);
$colCuentaCorriente[2]= new CuentaCorriente(0033, 1000000, $objCliente3, 30000);
$colCuentaCorriente[3]= new CuentaCorriente(0044, 1500000, $objCliente4, 30000);

//creacion coleccion de cuenta caja de ahorro
$colCuentaCajaAhorro[0]= new CajaDeAhorro(1100, 3000000, $objCliente1);
$colCuentaCajaAhorro[1]= new CajaDeAhorro(2200, 2000000, $objCliente5);
$colCuentaCajaAhorro[2]= new CajaDeAhorro(3300, 1000000, $objCliente6);
$colCuentaCajaAhorro[3]= new CajaDeAhorro(4400, 2000000, $objCliente2);


// 1. crear un objeto de la clase Banco
$objBanco = new Banco($colCuentaCorriente ,$colCuentaCajaAhorro, 2000000, $colClientes);

//2. Crear dos nuevos clientes Cliente1 y Cliente2, y agregarlos al banco.
$nuevoCliente1A= new Cliente("Nicolinolo", "locche", 41193872, 4444);
$nuevoCliente2B= new Cliente("Oscar", "Bonavena", 41193872, 5555);

$objBanco->incorporarCliente($nuevoCliente1A);
$objBanco->incorporarCliente($nuevoCliente2B);

//3. Crear dos Cuentas Corrientes, una asociada al cliente A y otra al cliente B, y agregarlas al Banco .
$cuentaCorrienteA = new CuentaCorriente(1111, 2000000, $nuevoCliente1A, 30000);
$cuentaCorrienteB = new CuentaCorriente(2222, 2000000, $nuevoCliente1A, 40000);

$coleccionCuentascorrientes = $objBanco->getColeccionCuentaCorriente();
$coleccionCuentascorrientes[]= $cuentaCorrienteA;
$coleccionCuentascorrientes[]= $cuentaCorrienteB;

$objBanco->setColeccionCuentaCorriente($coleccionCuentascorrientes);

//4. Crear tres Cajas de Ahorro, dos asociadas al cliente A y una asociada al cliente B, y agregarlas al Banco .
$cuentaCajaAhorroA0 = new CajaDeAhorro(3331, 300000, $nuevoCliente1A);
$cuentaCajaAhorroA1 = new CajaDeAhorro(3332, 400000, $nuevoCliente1A);
$cuentaCajaAhorroB0 = new CajaDeAhorro(4440, 400000, $nuevoCliente2B);

$coleccionCajasDeAhorro = $objBanco->getColeccionCajaAhorro();
$coleccionCajasDeAhorro[]= $cuentaCajaAhorroA0;
$coleccionCajasDeAhorro[]= $cuentaCajaAhorroA1;
$coleccionCajasDeAhorro[]= $cuentaCajaAhorroB0;

//5. Depositar $300 en cada una de las Cajas de Ahorro.
$objBanco->realizarDeposito(3331, 300);
$objBanco->realizarDeposito(3332, 300);
$objBanco->realizarDeposito(4440, 300);
$objBanco->realizarDeposito(1100, 300);
$objBanco->realizarDeposito(2200, 300);
$objBanco->realizarDeposito(3300, 300);
$objBanco->realizarDeposito(4400, 300);

//6. Transferir $150 de la Cuenta Corriente de Cliente1, a la Caja de Ahorro de Cliente2
$objBanco->realizarRetiro(0011, 150);
$objBanco->realizarDeposito(4400, 150);

//7. Mostrar los datos de todas las cuentas.
echo " \n Coleccion de cuenta corriente: \n";
print_r( $objBanco->getColeccionCuentaCorriente());

echo " \n Coleccion caja de ahorro:  \n";
print_r($objBanco->getColeccionCajaAhorro());











?>
