<?php

class Responsable{

    //atributos  nombre, apellido, Nro de Documento, dirección, mail y teléfono.
    private $nombre; 
    private $apellido;
    private $nroDocumento;
    private $direccion;
    private $mail;
    private $telefono;


    //constructor
    public function __construct($nombre, $apellido, $nroDocumento, $direccion, $mail, $telefono){
        
        $this->nombre=$nombre; 
        $this->apellido=$apellido; 
        $this->nroDocumento=$nroDocumento; 
        $this->direccion=$direccion; 
        $this->mail=$mail;
        $this->telefono=$telefono;
    }

    //toString
    public function __toString(){
        return "nombre: ".$this->getNombre()." \n".
                "apellido: ".$this->getApellido()." \n".
                "nroDocumento: ".$this->getNroDocumento()." \n".
                "direccion: ".$this->getDireccion()." \n".
                "mail: ".$this->getMail()." \n".
                "telefono: ".$this->getTelefono()." \n";

    }

    //Getters and Setters
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
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * Get the value of nroDocumento
     */ 
    public function getNroDocumento()
    {
        return $this->nroDocumento;
    }

    /**
     * Set the value of nroDocumento
     */ 
    public function setNroDocumento($nroDocumento)
    {
        $this->nroDocumento = $nroDocumento;
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

    }

    /**
     * Get the value of telefono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

    }


}
?>