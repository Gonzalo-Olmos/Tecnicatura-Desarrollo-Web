<?php
class Categoria
{
    //atributos 
    private $idCategoria;
    private $descripcion;



    //constructor
    function __construct($idCategoria, $descripcion)
    {
        $this->idCategoria = $idCategoria;
        $this->descripcion = $descripcion;
    }

    //ToString
    function __toString()
    {
        return
            "  idCategoria: " . $this->getIdCategoria() . "\n" .
            "                  descripcion: " . $this->getDescripcion() . "\n";
    }

    /**
     * Get the value of idCategoria
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set the value of idCategoria
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}
