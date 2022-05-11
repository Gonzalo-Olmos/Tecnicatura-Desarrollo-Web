<?php

class Empresa
{

    //atributos  identificación, nombre y la colección de Viajes que realiza.
    private $identificación;
    private $nombre;
    private $colViajes = [];

    //constructor

    public function __construct($identificación, $nombre, $colViajes)
    {
        $this->nombre = $nombre;
        $this->identificación = $identificación;
        $this->colViajes = $colViajes;
    }

    //metodos Getters
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getIdentificación()
    {
        return $this->identificación;
    }

    public function getColeccionViajes()
    {
        return $this->colViajes;
    }

    //metodos Setters
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setIdentificación($identificación)
    {
        $this->identificación = $identificación;
    }

    public function setColeccionViajes($colViajes)
    {
        $this->colViajes = $colViajes;
    }

    //metodo Tostring
    public function __toString()
    {
        return  "   Identificación: " . $this->getIdentificación() . "\n" .
            "   Nombre: " . $this->getNombre() . "\n" .
            "   Coleccion Viajes: \n" . $this->getColeccionViajes() . "\n";
    }


    /** Metodo darViajeADestino
     *Metodo que recibe por parámetro un destino junto a una cantidad de asientos y retorna una colección con todos los viajes disponibles a ese destino. 
     *@String $elDestino
     *@int $cantAsientos
     *@return array  Coleccion de Viajes Disponibles
     */
    public function darViajeADestino($elDestino, $cantAsientos)
    {
        $col_viajes_disponibles = [];
        $colViajesEmpresa = $this->getColeccionViajes();

        for ($i = 0; $i < count($colViajesEmpresa); $i++) {

            $unViaje = $colViajesEmpresa[$i];
            if ($elDestino == $unViaje->getDestino() && $cantAsientos <= $unViaje->getCantidad_asientos_disponibles()) {
                $col_viajes_disponibles[] = $unViaje;
            }
        }
        return  $col_viajes_disponibles;
    }

    /** Metoo incorporarViaje
     *Este Metodo incorpora un Nuevo Viaje, primero Verifica que nose encuentre registrado ningún otro viaje al mismo destino, en la misma fecha y con el mismo horario departida. 
     * El método retorna verdadero si la incorporación del viaje se realizó correctamente y falso en caso contrario 
     * @param Viaje $objViaje
     * @return boolean 
     */
    public function incorporarViaje($objViaje)
    {
        $colViajes = $this->getColeccionViajes();
        $incorpora = true;
        $i = 0;

        do {
            $unViajeDeColeccion = $colViajes[$i];

            $destino = $unViajeDeColeccion->getDestino();
            $fecha = $unViajeDeColeccion->getFecha();
            $horaPartida = $unViajeDeColeccion->getHora_de_partida();

            if ($destino == $objViaje->getDestino() && $fecha == $objViaje->getFecha() && $horaPartida == $objViaje->getHora_de_partida()) {
                $incorpora = false;
            }
            $i++;
        } while ($incorpora && $i < count($colViajes));

        if ($incorpora) {
            $colViajes[] = $objViaje;
        }

        return $incorpora;
    }

    /**Metodo venderViajeADestino
     * Este Metodo registra la asignación de un viaje en caso de ser posible
     * El método retorna la instancia del viaje asignado o null en caso contrario.
     * @param int $canAsientos
     * @return $destino objetoViaje o null
     */
    public function venderViajeADestino($canAsientos, $destino)
    {
        $colViajes = $this->getColeccionViajes();
        $registro=false;
        $i=0;
        do{
            $unViaje = $colViajes[$i];
            if ($destino == $unViaje->getDestino()&& $canAsientos <= $unViaje->getCantidad_asientos_disponibles()) {

                if($unViaje->asignarAsientosDisponibles($canAsientos)){
                    $registro=true;
                    $pos=$i;
                }else{
                    $registro=false;
                }
            }
            $i++;
        }while( $registro==false && $i<count($colViajes));

        if($registro){
            $unViaje = $colViajes[$i];
        }else{
            $unViaje = null;
        }

        return $unViaje;
    }

    /** Método montoRecaudado 
     * este metodo retorna el monto recaudado por la Empresa.
     * @return float monto recaudado
     */
public function montoRecaudado(){
    $monto=0; //variable acumuladora de monto
    $asientosVendidos=0;
    $colViajes = $this->getColeccionViajes();
    //Sumo todos los asientos vendidos de todos los viajes
    for ($i=0; $i <count($colViajes) ; $i++) { 
        $unViaje = $colViajes[$i];
        //calcula los asientos vendidos por un viaje
        $asientosVendidos = $asientosVendidos + ($unViaje->getCantidad_asientos_totales() -$unViaje->getCantidad_asientos_disponibles());
        //calcula el monto total de los asientos vendidos de un viaje y lo acumula
        $monto = $monto + $unViaje->getImporte() * $asientosVendidos;
        $asientosVendidos = 0;
    }

    return $monto;
}




}
