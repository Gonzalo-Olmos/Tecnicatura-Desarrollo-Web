<?php
class Equipo{

   //atributos 
   private $nombre;
   private $nombreCapitan;
   private $cantJugadores;
   private $objCategoria;


   //constructor
   function __construct($nombre, $nombreCapitan, $cantJugadores, $objCategoria)
   {
       $this->nombre = $nombre;
       $this->nombreCapitan = $nombreCapitan;
       $this->cantJugadores = $cantJugadores;
       $this->objCategoria = $objCategoria;
   }

   //ToString
   function __toString()
   {
       return
           "  Nombre: " . $this->getNombre() . "\n" .
           "  Capitan: " . $this->getNombreCapitan() . "\n" .
           "  cantJugadores: " . $this->getCantJugadores() . "\n". 
           "  categoria: " . $this->getObjCategoria() ;
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

   /**
    * Get the value of objCategoria
    */ 
   public function getObjCategoria()
   {
      return $this->objCategoria;
   }

   /**
    * Set the value of objCategoria
    */ 
   public function setObjCategoria($objCategoria)
   {
      $this->objCategoria = $objCategoria;
   }
}
?>