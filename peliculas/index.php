<?php

require_once 'Serie.php';
require_once 'Temporada.php';
require_once 'Capitulo.php';

$capitulos[] = new Capitulo(1,"Pilot","24 de septiembre de 2007",45,7);
$capitulos[] = new Capitulo(1,"The Big Bran Hypothesis","1 de octubre de 2007",45,8);
$capitulos[] = new Capitulo(1,"The Fuzzy Boots Corollary","8 de octubre de 2007",45,9);
$capitulos[] = new Capitulo(1,"The Luminous Fish Effect","15 de octubre de 2007",45,8);
$capitulos[] = new Capitulo(1,"The Hamburger Postulate","22 de octubre de 2007",45,7);


$temporadas[0] = new Temporada(1,2007,$capitulos);
$temporadas[1] = new Temporada(2,2008,[]);
$temporadas[3] = new Temporada(3,2009,[]);

$series[0]= new Serie("The Big Bang Theory","Comedia",$temporadas);

$series[1]= new Serie("Friends","Comedia",[]);

$consultaSerie = 0;
$consultaTemporada = 0;
$nombreSerie = $series[$consultaSerie]->getNombreSerie();
$totCapitulos = $series[$consultaSerie]->totalCapitulos($consultaTemporada);
$valoracionMedia = $series[$consultaSerie]->valoracionMedia();

echo "La serie $nombreSerie tiene $totCapitulos capítulos en la temporada $consultaTemporada";

echo "<br>";

echo "la valoración media es $valoracionMedia" ;







