<?php
/* 10.c. Diseñar e implementar la clase Fecha. La clase deberá disponer de los atributos mínimos y
necesarios para almacenar el día, el mes y el año, además de métodos que devuelvan un String con la
fecha en forma abreviada (16/02/2000) y extendida (16 de febrero de 2000) . Implementar una función
incremento, que reciba como parámetros un entero y una fecha, que retorne una nueva fecha, resultado
de incrementar la fecha recibida por parámetro en el numero de días definido por el parámetro entero.
Nota 1: Son años bisiestos los múltiplos de cuatro que no lo son de cien, salvo que lo sean de
cuatrocientos, en cuyo caso si son bisiestos.
Nota 2: Para la solución de este problema puede ser útil definir un método incrementa_un_dia */


class Fecha{

//atributos
private $dia;
private $mes;
private $año;

//Constructor
public function __construct($dia, $mes, $anio){
    $this->dia=$dia;
    $this->mes=$mes;
    $this->anio=$anio;
}

//Getters
public function getDia(){
    return $this->dia;
}

public function getMes(){
    return $this->mes;
}

public function getAnio(){
return $this->anio;
}
 
//Setters
public function setDia($dia){
    $this->dia = $dia;
}

public function setMes($mes){
    $this->mes = $mes;
}

public function setAnio($anio){
    $this->anio = $anio;
}

//toString
public function __toString()
{
    return "dia: ". $this->getDia()." mes: ".$this->getMes()." anio: ".$this->getAnio();
}

/*metodo retorna un String con la fecha abrebiada
* @return String
*/
public function fechaAbrebiada(){
    return "(".$this->getDia()."/".$this->getMes()."/".$this->getAnio().")";
}

/*metodo retorna un String con la fecha Extendida
* @return String
*/
public function fechaExtendida(){
    return "(".$this->getDia()." de ".$this->nombreMes($this->getMes())." de ".$this->getAnio().")";
}

/**Esta Función retorna un string con el nombre de un mes, según el numero de mes que entre por parametro
 * @param int $mes
 * @return String $nombre
 */
public function nombreMes($mes){
    switch ($mes) {
        case '1':
            $nombre = "Enero";
            break;
            case '2':
                $nombre = "Febrero";
                break;
                case '3':
                    $nombre = "Marzo";
                    break;
                    case '4':
                        $nombre = "Abril";
                        break;
                        case '5':
                            $nombre = "Mayo";
                            break;
                            case '6':
                                $nombre = "Junio";
                                break;
                                case '7':
                                    $nombre = "Julio";
                                    break;
                                    case '8':
                                        $nombre = "Agosto";
                                        break;
                                        case '9':
                                            $nombre = "Septiembre";
                                            break;
                                            case '10':
                                                $nombre = "Octubre";
                                                break;
                                                case '11':
                                                    $nombre = "Noviembre";
                                                    break;
                                                    case '12':
                                                        $nombre = "Diciembre";
                                                        break;
    }
    return $nombre;  
}



 
/**un funcion incremento que reciba como parámetros un entero y una fecha, que retorne una nueva fecha, resultado de incrementar la fecha recibida por 
 * parámetro en el numero de días($numDias) definido por el parámetro entero
 * @param int $numDias
 * @param Fecha $objetoFecha 
 * @return Fecha Nueva Fecha incrementada
 */
public static function incremento($numDias, $objetoFecha){
    //Fecha $nuevaFecha
    //obtengo los valores de los atributos para crear un nuevo objeto
    $nuevoDia = $objetoFecha->getDia();
    $nuevoMes = $objetoFecha->getMes();
    $nuevoAño = $objetoFecha->getAnio();

    $nuevaFecha = new Fecha($nuevoDia,$nuevoMes,$nuevoAño);

for ($i=0; $i < $numDias ; $i++) { 
 
    $nuevaFecha->incrementa_un_dia();
}

return $nuevaFecha;
}


/**Esta función incrementa un dia a un Objeto Fecha
 * 
 */
public function incrementa_un_dia(){

    //Todos los meses que tienen 31 dias
if ($this->getMes() == 1 || $this->getMes() == 3 || $this->getMes() == 5 || $this->getMes() == 7 || $this->getMes() == 8 || $this->getMes() == 10 || $this->getMes() == 12 ) {
    //Si el numero de Dias es Menor o Igual a 30, incremento Uno,
    if ($this->getDia() <= 30) {
        $this->setDia( $this->getDia()+1 );
    }else{ 
        //SINO El numero de Dias pasa a 1 y se Incrementa 1 en el Mes
        $this->setDia(1);
         //si el numero del mes no es 12 le incremento uno 
         if($this->getMes()<=11){
            $this->setMes($this->getMes()+1) ;
            }else{ 
                //SINO se setea el Mes en 1, Y El Año se incrementa en 1
            $this->setMes(1);

            // el año se incrementa en UNO
            $this->setAnio($this->getAnio()+1);

            }    
        }

        //Todos los meses que tienen 30 dias
    }elseif ($this->getMes() == 4 || $this->getMes() == 6 || $this->getMes() == 9 || $this->getMes() == 11) {
         //Si el numero de Dias es Menor o Igual a 29, incremento Uno,
    if ($this->getDia() <= 29) {
        $this->setDia( $this->getDia()+1 );
    }else{ 
        //SINO El numero de Dias pasa a 1 y se Incrementa 1 en el Mes
        $this->setDia(1);
         //si el numero del mes no es 12 le incremento uno 
         if($this->getMes()<=11){
            $this->setMes($this->getMes()+1) ;
            }else{ 
                //SINO se setea el Mes en 1, Y El Año se incrementa en 1
            $this->setMes(1);

            // el año se incrementa en UNO
            $this->setAnio($this->getAnio()+1);

            }    
        }
    }else{
        //SI entra acá es porque el mes es FEBRERO
        
        //verifica si es Año bisiesto
        
        $bisiesto =$this->esBisiesto();

         if ($bisiesto = 1 ) {
                  //si es bisiesto entonces el mes trae 29 dias
            //Si el numero de Dias es Menor o Igual a 28, incremento Uno,
            if($this->getDia() <= 28) {
             $this->setDia( $this->getDia()+1 );
            }else{ 
                 //SINO El numero de Dias pasa a 1 y se Incrementa 1 en el Mes
                 $this->setDia(1);
                 $this->setMes($this->getMes() +1 );
            }    
        
         }else{
             //entonces NO es bisiesto
             //Si el numero de Dias es Menor o Igual a 27, incremento Uno,
            if($this->getDia() <= 27) {
                $this->setDia( $this->getDia()+1 );
               }else{ 
                    //SINO El numero de Dias pasa a 1 y se Incrementa 1 en el Mes
                    $this->setDia(1);
                    $this->setMes($this->getMes() +1 );
               }   

         }

    }

}


/**
 * @param int $anio
 * @Return Boolean
 */
 public function esBisiesto(){

    $anio = $this->getAnio();

    $bisiesto = 0;
    if ($anio % 4 ==0 && $anio % 100 != 0 )  {
        $bisiesto = 1;
    }elseif ($anio % 4 ==0 && $anio % 100 == 0 && $anio%400 == 0) {
        $bisiesto = 1;
    }

    return $bisiesto;
} 


}



?>