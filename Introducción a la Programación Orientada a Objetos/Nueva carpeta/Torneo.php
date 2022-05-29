<?php
class Torneo{

      //atributos
      private $colPartidos=[];
      private $importe;

      //constructor
      function __construct($colPartidos, $importe)
      {
          $this->colPartidos = $colPartidos;
          $this->importe = $importe;
      }
  
      //ToString
      function __toString()
      {
          return
              "  colPartidos: " . implode($this->getColPartidos()) . "\n" .
              "  importe: " . $this->getImporte() . "\n";
      }
  
      //Getters And Setters
      /**
       * Get the value of colPartidos
       */ 
      public function getColPartidos()
      {
            return $this->colPartidos;
      }

      /**
       * Set the value of colPartidos
       */ 
      public function setColPartidos($colPartidos)
      {
            $this->colPartidos = $colPartidos;

            return $this;
      }

      /**
       * Get the value of importe
       */ 
      public function getImporte()
      {
            return $this->importe;
      }

      /**
       * Set the value of importe
       */ 
      public function setImporte($importe)
      {
            $this->importe = $importe;
      }


      /* Implementar el método ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipo). 
        El método debe crear y retornar una instancia de la clase Partido que corresponda y almacenarla en la colección. 
        Se debe chequear que los 2 equipos tengan la misma categoría y cantidad de jugadores. */
      public function ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipo){

        //crear instancia Partido

        //almacenar la instancia en la coleccion
        

      }



}
?>