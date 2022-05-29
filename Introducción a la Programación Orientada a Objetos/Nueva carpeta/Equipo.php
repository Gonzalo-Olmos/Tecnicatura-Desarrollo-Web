<?php
class Equipo{

   //atributos 
   private $nombre;
   private $nombreCapitan;
   private $cantJugadores;


   //constructor
   function __construct($nombre, $nombreCapitan, $cantJugadores)
   {
       $this->nombre = $nombre;
       $this->nombreCapitan = $nombreCapitan;
       $this->cantJugadores = $cantJugadores;
   }

   //ToString
   function __toString()
   {
       return
           "  nombre: " . $this->getNombre() . "\n" .
           "  nombreCapitan: " . $this->getNombreCapitan() . "\n" .
           "  cantJugadores: " . $this->getCantJugadores() . "\n";
   }


   //Setters And Getters
   /**
    * Get the value of nombre
    */ 
   public function getNombre()
   {
      return $this->nombre;
   }

   /**
    * Set the value of nombre
    */ 
   public function setNombre($nombre)
   {
      $this->nombre = $nombre;
   }

   /**
    * Get the value of nombreCapitan
    */ 
   public function getNombreCapitan()
   {
      return $this->nombreCapitan;
   }

   /**
    * Set the value of nombreCapitan
    */ 
   public function setNombreCapitan($nombreCapitan)
   {
      $this->nombreCapitan = $nombreCapitan;
   }

   /**
    * Get the value of cantJugadores
    */ 
   public function getCantJugadores()
   {
      return $this->cantJugadores;
   }

   /**
    * Set the value of cantJugadores
    */ 
   public function setCantJugadores($cantJugadores)
   {
      $this->cantJugadores = $cantJugadores;
   }
}
?>