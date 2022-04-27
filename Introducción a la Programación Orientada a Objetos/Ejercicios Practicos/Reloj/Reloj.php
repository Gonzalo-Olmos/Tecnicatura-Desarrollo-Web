<?php

Class Reloj{

    //ATRIBUTOS
        private $horas;
        private $minutos;
        private $segundos; 
        
    //CONSTRUCTOR
    public function __construct($horas, $minutos, $segundos)
    {
        $this->horas = $horas;
        $this->minutos = $minutos;
        $this->segundos = $segundos;
    }

    //GETTERS

    /**getHoras
     * @return int
     */
    public function getHoras(){
        return $this->horas;
    }

    /**getMinutos
     * @return int
     */
    public function getMinutos(){
        return $this->minutos;
    }

    /**getSegundos
     * @return int
     */
    public function getSegundos(){
        return $this->segundos;
    }

    //SETTERS
    
    /**setHoras
     * @param int $horas
     */
    public function setHoras($horas){
        $this->horas = $horas;
    }

    /**setMinutos
     * @param int $min
     */
    public function setMinutos($min){
        $this->minutos = $min;
    }

    /**setSegundos
     * @param int $seg
     */
    public function setSegundos($seg){
        $this->segundos = $seg;
    }

    //TOSTRING
    public function __toString()
    {
        return $this->getHoras()." : ". $this->getMinutos()." : ".$this->getSegundos(). "  \n";
    }


    /**Metodo puesta_a_cero
    *  Setea los atributos en 0
    */
    public function puesta_a_cero(){
        $this->setHoras(0);
        $this->setMinutos(0);
        $this->setSegundos(0);
    }

    // Metodo incrementar
    public function incremento(){

        do{
            if ($this->getHoras()==23 && $this->getMinutos()==59 && $this->getSegundos()==59) {
                //si las horas llegan a 23, 59 minutos y 59 segundos, se hace la puesta a cero
                $this->puesta_a_cero();
               echo $this->getHoras(). " : ".$this->getMinutos(). " : ". $this->getSegundos(). " \n";
                                   
            }else{
                if($this->getMinutos()>=59 && $this->getSegundos() >=59 ){
                    //si el minuto llega a 59, suma 1 a la hora y los minutos vuelven a cero
                    $this->setHoras($this->getHoras()+1);
                    $this->setMinutos(0);
                }

                if ($this->getSegundos() >= 59){
                    //si los segundos llegan a 59, se suma un minuto
                    $this->setMinutos($this->getMinutos()+1);
                }
                if ($this->getSegundos() >= 59){
                    //cuando los segundos llegan a 59, se recetean a 0
                    $this->setSegundos(0);
                }else{
                    //mientras los segundos no lleguen a 59, se sigue sumando 1 a los segundos
                    $this->setSegundos($this->getSegundos()+1);
                }
                
                echo $this;
            }

        }while($this->getHoras()  != 0);
    }

     }


     



?>