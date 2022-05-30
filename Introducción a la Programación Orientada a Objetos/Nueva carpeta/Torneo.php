<?php
class Torneo
{

      //atributos
      private $colPartidos = [];
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

      /** 
       * El método crea y retorna una instancia de la clase Partido que corresponda y lo almacena en la colección. 
       * Verifica que los 2 equipos tengan la misma categoría y cantidad de jugadores.
       *@param Equipo $OBJEquipo1
       *@param Equipo $OBJEquipo2
       *@param String $fecha
       *@param String $tipo
       *@return Partido
       */
      public function ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipo)
      {
            $coleccionPartidos = $this->getColPartidos();
            $partido = null;

            $objCategoriaE1 = $OBJEquipo1->getObjCategoria();
            $ObjCategoriaE2 = $OBJEquipo2->getObjCategoria();

            //verificacion de que los equipos tengan la misma categoria
            if ($objCategoriaE1 == $ObjCategoriaE2) {
                  //verifica que tengan la misma cantidad de jugadores
                  if ($OBJEquipo1->getCantJugadores() == $OBJEquipo2->getCantJugadores()) {

                        //crear instancia Partido y almacena en coleccion
                        if ($tipo == "basket") {
                              //Partido de Basket
                              $partido = new Basket($OBJEquipo1, $OBJEquipo2, 0000, "2022-5-29", 20, 13, 15);
                              $coleccionPartidos[] = $partido;
                              $this->setColPartidos($coleccionPartidos);
                        } else {
                              //Partido de Futbol
                              $partido = new Futbol($OBJEquipo1, $OBJEquipo2, 0000, "2022-5-29", 4, 0);
                              $coleccionPartidos[] = $partido;
                              $this->setColPartidos($coleccionPartidos);
                        }
                  }
            }
            return $partido;
      }

      /**
       * Implementar el método darGanadores($deporte) en la clase Torneo que recibe por parámetro si se trata
       *de un partido de futbol o de basquetbol y en base al parámetro busca entre esos partidos los equipos
       *ganadores (equipo con mayor cantidad de goles). El método retorna una colección con los objetos de los
       *equipos encontrados
       *@return Array equipos ganadores
       */
      public function darGanadores($deporte)
      {
            $coleccionPartidos = $this->getColPartidos();
            $colEquiposGanadores = [];
            switch ($deporte) {
                  case 'basket':
                        for ($i = 0; $i < count($coleccionPartidos); $i++) {
                              if (is_a($coleccionPartidos[$i], 'Basket')) {
                                    $cantGolesE1 = $coleccionPartidos[$i]->getCantGolesE1();
                                    $cantGolesE2 = $coleccionPartidos[$i]->getCantGolesE2();
                                    if ($cantGolesE1 > $cantGolesE2) {
                                          $colEquiposGanadores[] = $coleccionPartidos[$i]->getObjEquipo1();
                                    } elseif ($cantGolesE1 < $cantGolesE2) {
                                          $colEquiposGanadores[] = $coleccionPartidos[$i]->getObjEquipo2();
                                    }
                              }
                        }

                        break;

                  case 'futbol':
                        for ($i = 0; $i < count($coleccionPartidos); $i++) {
                              if (is_a($coleccionPartidos[$i], 'Futbol')) {
                                    $cantGolesE1 = $coleccionPartidos[$i]->getCantGolesE1();
                                    $cantGolesE2 = $coleccionPartidos[$i]->getCantGolesE2();
                                    if ($cantGolesE1 > $cantGolesE2) {
                                          $colEquiposGanadores[] = $coleccionPartidos[$i]->getObjEquipo1();
                                    } elseif ($cantGolesE1 < $cantGolesE2) {
                                          $colEquiposGanadores[] = $coleccionPartidos[$i]->getObjEquipo2();
                                    }
                              }
                        }
                        break;
            }
      }
}
