<?php

class Capitulo
{
    private $numeroCapitulo;
    private $titulo;
    private $fechaEstreno;
    private $duracion;
    private $valoracion;
    
    public function __construct($numeroCapitulo,$titulo,$fechaEstreno,$duracion,$valoracion)
    {        
        $this->numeroCapitulo = $numeroCapitulo;
        $this->titulo = $titulo;
        $this->fechaEstreno = $fechaEstreno;
        $this->duracion = $duracion;
        $this->valoracion = $valoracion;
    }



    /**
     * Get the value of valoracion
     */ 
    public function getValoracion()
    {
        return $this->valoracion;
    }
}