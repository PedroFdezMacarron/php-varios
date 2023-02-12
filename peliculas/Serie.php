<?php

require_once 'Temporada.php';

class Serie
{
    private $nombreSerie;
    private $generoSerie;
    private $temporadas;

    public function __construct($nombreSerie,$generoSerie,$temporadas)
    {        
        $this->nombreSerie = $nombreSerie;
        $this->generoSerie = $generoSerie;
        $this->temporadas = $temporadas;
    }

    public function totalCapitulos($temporada){
        return $this->temporadas[$temporada]->totalCapitulos();
    }

    public function valoracionMedia(){
        $valorTotalCapitulos = 0;
        $numeroCapitulos = 0;
        foreach($this->temporadas as $key => $temporada){
            $valorTotalCapitulos += $temporada->valorCapitulos();
            $numeroCapitulos += $this->totalCapitulos($key);
        }
        return $valorTotalCapitulos/ $numeroCapitulos  ;
    }

    /**
     * Get the value of nombreSerie
     */ 
    public function getNombreSerie()
    {
        return $this->nombreSerie;
    }

    /**
     * Set the value of nombreSerie
     *
     * @return  self
     */ 
    public function setNombreSerie($nombreSerie)
    {
        $this->nombreSerie = $nombreSerie;

        return $this;
    }
}
