<?php

require_once 'Capitulo.php';

class Temporada
{
    private $numeroTemporada;
    private $year;
    private array $capitulos;

    public function __construct(int $numeroTemporada,int $year, array $capitulos)
    {   
        $this->numeroTemporada = $numeroTemporada;
        $this->year = $year;
        $this->capitulos = $capitulos;
    }

    public function totalCapitulos(){
        return count($this->capitulos);
    }

    
    public function valorCapitulos(){
        $valorCapitulos=0;
        foreach ($this->capitulos as $capitulo) {
              $valorCapitulos += $capitulo->getValoracion(); 
        }
        return $valorCapitulos;
    }
    
    public function valCapitulos(){      
        
        return array_sum(array_map(fn($capi) => $capi->valoracion,$this->capitulos));
    }

}