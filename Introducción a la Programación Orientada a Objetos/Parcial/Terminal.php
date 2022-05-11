<?php

class Terminal
{

    //atributos : denominación, dirección y la colección empresas registradas en la terminal.
    private $denominación;
    private $dirección;
    private $coleccion_Empresas = [];

    //constructor
    public function __construct($denominación, $dirección, $coleccion_Empresas)
    {
        $this->denominación = $denominación;
        $this->dirección = $dirección;
        $this->coleccion_Empresas = $coleccion_Empresas;
    }

    //metodos Getters
    public function getDenominacion()
    {
        return $this->denominación;
    }

    public function getDireccion()
    {
        return $this->dirección;
    }

    public function getColeccion_Empresas()
    {
        return $this->coleccion_Empresas;
    }

    //metodos Setters
    public function setDenominación($denominación)
    {
        $this->denominación = $denominación;
    }

    public function setDirección($dirección)
    {
        $this->dirección = $dirección;
    }

    public function setColeccion_Empresas($coleccion_Empresas)
    {
        $this->coleccion_Empresas = $coleccion_Empresas;
    }

    //metodo Tostring
    public function __toString()
    {
        return  "   denominación: " . $this->getDenominacion() . "\n" .
            "   dirección: " . $this->getDireccion() . "\n" .
            "   Coleccion Empresas: \n" . $this->getColeccion_Empresas()."\n";
    }


    /**
     * Este metodo Registra la venta de un viaje
     * 
     */
    public function ventaAutomatica($cantAsientos, $fecha, $destino, $empresa){

        $viajeVendido = $empresa->venderViajeADestino($cantAsientos, $destino);

        if($empresa->incorporarViaje($viajeVendido)){

        $viajeVendido->asignarAsientosDisponibles($cantAsientos);

    }
    }

    /**
     * Implementar el método empresaMayorRecaudacion retorna un objeto de la clase empresa que se corresponde con la de mayor recaudación.
     * @return Empresa 
     */
    public function empresaMayorRecaudacion(){
        $coleccionEmpresas = $this->getColeccion_Empresas();
        $montoMasAlto= 0;
        for ($i=0; $i <count($coleccionEmpresas); $i++) { 
            $unaEmpresa = $coleccionEmpresas[$i];
            $monto = $unaEmpresa->montoRecaudado();
            if ($monto > $montoMasAlto) {
                $empresaConMoltoMasalto= $unaEmpresa;
            }
        }
        return $unaEmpresa;
    }

    /**
     * Implementar el método responsableViaje($numeroViaje) que recibe por parámetro un numero de viaje y retorna al responsable del viaje.
     */

    public function responsableViaje($numeroViaje){

        $coleccionEmpresas = $this->getcoleccion_Empresas();
        //Me falto tiempo...

    }

}