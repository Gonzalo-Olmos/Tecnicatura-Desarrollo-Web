<?php

class Banco
{

    //atributos
    private $coleccionCuentaCorriente; // variable que contiene una colección de instancias de la clase Cuentas Corrientes
    private $coleccionCajaAhorro;  //variable que contiene una colección de instancias de la clase Caja de Ahorro
    private $ultimoValorCuentaAsignado; //variable que contiene el ultimo valor asignado a una cuenta del banco
    private $coleccionCliente; //variable que contiene una colección de instancias de la clase Cliente

    //constructor
    public function __construct($coleccionCuentaCorriente, $coleccionCajaAhorro, $ultimoValorCuentaAsignado, $coleccionCliente)
    {
        $this->coleccionCuentaCorriente = $coleccionCuentaCorriente;
        $this->coleccionCajaAhorro = $coleccionCajaAhorro;
        $this->ultimoValorCuentaAsignado = $ultimoValorCuentaAsignado;
        $this->coleccionCliente = $coleccionCliente;
    }


    //metodo Tostring
    public function __toString()
    {
        return
            "  coleccion Cuenta Corriente: " . $this->mostrar_coleccion_ctaCorriente() . "\n" .
            "  coleccion Caja de Ahorro: " . $this->mostrar_coleccion_ctaCajaAhorro() . " \n" .
            "  ultimo Valor Cuenta Asignado: " . $this->getUltimoValorCuentaAsignado() . "\n" .
            "  coleccion Cliente: " . $this->mostrar_coleccion_cliente() . "\n";
    }


    /**
     * Get the value of coleccionCuentaCorriente
     */
    public function getColeccionCuentaCorriente()
    {
        return $this->coleccionCuentaCorriente;
    }

    /**
     * Set the value of coleccionCuentaCorriente
     */
    public function setColeccionCuentaCorriente($coleccionCuentaCorriente)
    {
        $this->coleccionCuentaCorriente = $coleccionCuentaCorriente;
    }

    /**
     * Get the value of coleccionCajaAhorro
     */
    public function getColeccionCajaAhorro()
    {
        return $this->coleccionCajaAhorro;
    }

    /**
     * Set the value of coleccionCajaAhorro
     */
    public function setColeccionCajaAhorro($coleccionCajaAhorro)
    {
        $this->coleccionCajaAhorro = $coleccionCajaAhorro;
    }

    /**
     * Get the value of ultimoValorCuentaAsignado
     */
    public function getUltimoValorCuentaAsignado()
    {
        return $this->ultimoValorCuentaAsignado;
    }

    /**
     * Set the value of ultimoValorCuentaAsignado
     */
    public function setUltimoValorCuentaAsignado($ultimoValorCuentaAsignado)
    {
        $this->ultimoValorCuentaAsignado = $ultimoValorCuentaAsignado;
    }

    /**
     * Get the value of coleccionCliente
     */
    public function getColeccionCliente()
    {
        return $this->coleccionCliente;
    }

    /**
     * Set the value of coleccionCliente
     */
    public function setColeccionCliente($coleccionCliente)
    {
        $this->coleccionCliente = $coleccionCliente;
    }


    /**Está funcion hace un recorrido al arreglo para mostrar la informacion de cada una de las cuentas corrientes
     * @return String
     */
    public function mostrar_coleccion_ctaCorriente()
    {
        $coleccionCtaCorriente = [];
        $coleccionCtaCorriente  = $this->getColeccionCuentaCorriente();
        $cadena = " ";
        for ($i = 0; $i < count($coleccionCtaCorriente); $i++) {
            $objCuentaCorriente = $coleccionCtaCorriente[$i];
            $cadena = $cadena . "\n---- Cuenta Corriente " . ($i + 1) . " ----: \n";
            $cadena = $cadena . $objCuentaCorriente;
        }
        return $cadena;
    }


    /**Está funcion hace un recorrido al arreglo para mostrar la informacion de cada una de las cuentas caja de ahorro
     * @return String
     */
    public function mostrar_coleccion_ctaCajaAhorro()
    {
        $coleccionCtaCajaAhorro = [];
        $coleccionCtaCajaAhorro  = $this->getColeccionCuentaCorriente();
        $cadena = " ";
        for ($i = 0; $i < count($coleccionCtaCajaAhorro); $i++) {
            $objCajaAhorro = $coleccionCtaCajaAhorro[$i];
            $cadena = $cadena . "\n---- Cuenta caja Ahorro " . ($i + 1) . " ----: \n";
            $cadena = $cadena . $objCajaAhorro;
        }
        return $cadena;
    }

    /**Está funcion hace un recorrido al arreglo para mostrar la informacion de cada cliente
     * @return String
     */
    public function mostrar_coleccion_cliente()
    {
        $coleccionCliente = [];
        $coleccionCliente  = $this->getColeccionCliente();
        $cadena = " ";
        for ($i = 0; $i < count($coleccionCliente); $i++) {
            $objCliente = $coleccionCliente[$i];
            $cadena = $cadena . "\n---- Cliente " . ($i + 1) . " ----: \n";
            $cadena = $cadena . $objCliente;
        }
        return $cadena;
    }

    //metodos propios de Banco
    /*
     *Metodo que permite agregar un nuevo cliente al Banco
     *@param Cliente $objCliente
     */
    public function incorporarCliente($objCliente)
    {
        $coleccionClientes = $this->getColeccionCliente();
        $coleccionClientes[] = $objCliente;

        $this->setColeccionCliente($coleccionClientes);
    }

    /**
     * Metodo que Agrega una nueva Cuenta a la colección de cuentas Corrientes, verificando que el cliente dueño de la cuenta es cliente del Banco.
     * @param int $numeroCliente 
     * @param float $montoDescubierto 
     * @return boolean retorna true si la operacion salio con exito, false en caso contrario
     */
    public function incorporarCuentaCorriente($numeroCliente, $montoDescubierto)
    {
        $operacion = false;
        $i = 0;
        $coleccionCliente = $this->getColeccionCliente();

        //verifico que $numeroCliente se encuentre en $coleccionCliente
        $objCliente = Banco::verificarSiExisteCliente($numeroCliente, $coleccionCliente);
        if ($objCliente != null) {
            //una vez encontrado, guardo el objeto Cliente en la variable $objDueño
            $objDueño = $objCliente;
            $operacion = true;
            //agregar una cuenta nueva a la coleccion de cuentas corrientes
            $cantCuentasCorrientes = count($this->getColeccionCuentaCorriente());
            $numCuenta = $cantCuentasCorrientes + 1;
            $saldoActual = 0;
            $nuevaCuentaC = new CuentaCorriente($numCuenta, $saldoActual, $objDueño, $montoDescubierto);
            $coleccionCuentaCorriente = $this->getColeccionCuentaCorriente();
            $coleccionCuentaCorriente[] = $nuevaCuentaC;
            $this->setColeccionCuentaCorriente($coleccionCuentaCorriente);
        }
        return $operacion;
    }

    /**
     *Esta Función busca un Cliente específico en un arreglo de objetos Cliente.
     *Si lo encuenta retorna el objeto encontrado, sino retorna null.
     * @param int $numeroCliente
     * @param array $coleccionCliente 
     * @return Cliente 
     */
    static function verificarSiExisteCliente($numeroCliente, $coleccionCliente)
    {

        $i = 0;
        $seEncontro = false;
        while ($i < count($coleccionCliente) && $seEncontro == false) {

            //obtengo el objeto cliente de la posicion $i
            $objCliente = $coleccionCliente[$i];
            //obtengo el atributo $nroCliente de el objeto
            $nroCliente = $objCliente->getNroCliente();

            if ($numeroCliente == $nroCliente) {
                $seEncontro = true;
            } else {
                $objCliente = null;
            }

            $i++;
        }
        return $objCliente;
    }

    /**
     *Agregar una nueva Caja de Ahorro a la colección de cajas de ahorro, verificando que el cliente dueño de la cuenta es cliente del Banco
     *@param int $numeroCliente 
     *@return boolean retorna true si la operacion salio con exito, false en caso contrario
     */
    public function incorporarCajaAhorro($numeroCliente)
    {
        $operacion = false;
        $i = 0;
        $coleccionCliente = $this->getColeccionCliente();

        //verifico que $numeroCliente se encuentre en $coleccionCliente
        $objCliente = Banco::verificarSiExisteCliente($numeroCliente, $coleccionCliente);
        if ($objCliente != null) {
            //una vez encontrado, guardo el objeto Cliente en la variable $objDueño
            $objDueño = $objCliente;
            $operacion = true;
            //agregar una cuenta nueva a la coleccion de cuentas de Caja de Ahorro
            $cantCuentasAhorro = count($this->getColeccionCuentaCorriente());
            $numCuenta = $cantCuentasAhorro + 1;
            $saldoActual = 0;
            $nuevaCuentaAhorro = new CajaDeAhorro($numCuenta, $saldoActual, $objDueño);
            $coleccionCajaDeAhorro = $this->getColeccionCajaAhorro();
            $coleccionCajaDeAhorro[] = $nuevaCuentaAhorro;
            $this->setColeccionCajaAhorro($coleccionCajaDeAhorro);
        }
        return $operacion;
    }

    /**
     * Metodo que Dado un número de Cuenta y un monto, realizar depósito.
     * @param int $numCuenta  suponemos que el numCuenta es Clave primaria de Cuenta
     * @param float $monto
     * @return boolean si se pudo depositar o no
     */
    public function realizarDeposito($numCuenta, $monto)
    {
        $sePudoDepositar = false;

        $coleccionCuentaCorriente = $this->getColeccionCuentaCorriente();
        $coleccionCuentaAhorro = $this->getColeccionCajaAhorro();

        //busco el numero de cuenta
        $position = $this->buscarCuentaCorriente($numCuenta);
        if ($position != -1) {
            #deposito en la cuenta corriente
            $saldoActual = $coleccionCuentaCorriente[$position];
            $coleccionCuentaCorriente[$position]->setSaldoActual($monto + $saldoActual);;
            $this->setColeccionCuentaCorriente($coleccionCuentaCorriente);
            $sePudoDepositar = true;
        }else {
            $position = $this->buscarCuentaAhorro($numCuenta);
            if ($position != -1) {
                # deposito en la cuenta de caja de ahorro
                $saldoActual = $coleccionCuentaAhorro[$position];
                $coleccionCuentaAhorro[$position]->setSaldoActual($monto + $saldoActual);;
                $this->setColeccionCajaAhorro($coleccionCuentaAhorro);
                $sePudoDepositar=true;
            }
        }
        return $sePudoDepositar;
    }


    /**
     * Metodo que busca un numero de cuena en la coleccion de cuentas corrientes
     * @return int retorna la posicion del arreglo que tenga el mismo numero de cuenta
     */
    function buscarCuentaCorriente($numCuenta)
    {
        $i = 0;
        $seEncontro = false;
        $position = -1;
        //obtengo la coleccion
        $coleccionCuentaCorriente = $this->getColeccionCuentaCorriente();

        //recorrido do while hasta encontrar el numero de cuenta
        do {
            $numeroCuenta = $coleccionCuentaCorriente[$i];
            if ($numCuenta == $numeroCuenta) {
                $seEncontro = true;
                $position = $i;
            }
            $i++;
        } while (!$seEncontro && $i < count($coleccionCuentaCorriente));

        return $position;
    }

    /**
     * Metodo que busca un numero de cuena en la coleccion de cuentas de caja de ahorro
     * @return int retorna la posicion del arreglo que tenga el mismo numero de cuenta
     */
    function buscarCuentaAhorro($numCuenta)
    {
        $i = 0;
        $seEncontro = false;
        $position = -1;

        //obtengo la coleccion
        $coleccionCuentaAhorro = $this->getColeccionCajaAhorro();

        //recorrido do while hasta encontrar el numero de cuenta
        do {
            $numeroCuenta = $coleccionCuentaAhorro[$i];
            if ($numCuenta == $numeroCuenta) {
                $seEncontro = true;
                $position = $i;
            }
            $i++;
        } while (!$seEncontro && $i < count($coleccionCuentaAhorro));

        return $position;
    }

    /**
     * Metodo que Dado un número de Cuenta y un monto, realiza un retiro.
     * @param int $numCuenta  suponemos que el numCuenta es Clave primaria de Cuenta
     * @param float $monto
     * @return boolean si se pudo retirar o no
     */
    public function realizarRetiro($numCuenta, $monto)
    {
        $sePudoRetirar = false;

        $coleccionCuentaCorriente = $this->getColeccionCuentaCorriente();
        $coleccionCuentaAhorro = $this->getColeccionCajaAhorro();

        //busco el numero de cuenta
        $position = $this->buscarCuentaCorriente($numCuenta);
        if ($position != -1) {
            #retiro en la cuenta corriente
            $saldoActual = $coleccionCuentaCorriente[$position];
            $coleccionCuentaCorriente[$position]->setSaldoActual($saldoActual - $monto);
            $this->setColeccionCuentaCorriente($coleccionCuentaCorriente);
            $sePudoRetirar = true;

        }else{
            $position = $this->buscarCuentaAhorro($numCuenta);
            if ($position != -1) {
                # retiro en la cuenta de caja de ahorro
                $saldoActual = $coleccionCuentaAhorro[$position];
                $coleccionCuentaAhorro[$position]->setSaldoActual($saldoActual - $monto);
                $this->setColeccionCajaAhorro($coleccionCuentaAhorro);
                $sePudoRetirar=true;
            }
        }
        return $sePudoRetirar;
    }



}
