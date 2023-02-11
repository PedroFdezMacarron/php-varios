<?php

// Empieza aquí a escribir tu código PHP...

require_once './Jerga.php';

$doc = "hola hermano,  porque no es igual escribir con todas las letras de las palabras que con los sustitutos. Está claro que depende tambien de donde se use. está igual de bien hecho en cualquier sitio? aunque no me importa trabajar 8 horas";

$millenial = array(
    "porque" => "xq",
    "igual" => "=",
    "que" => "k",
    "donde" => "dnd",
    "tambien" => "tanbn",
    "bien" => "bn",
    "hermano" => "bro",
    "hola" => "hi",
    "8"=>"4"
);

$chino = array(
    "porque" => "polque",
    "igual" => "lomimo",
    "que" => "qe",
    "donde" => "",
    "tambien" => "tabien",
    "bien" => "",
    "hermano" => "helmano",
    "hola" => "nihao",
    "escribir" => "eclibí",
    "todas" => "toda",
    "palabras" => "palabla",
    "las"=>"a",
    "letras"=>"letla",
    "con"=>"co",
    "es"=>"e",
    "8"=>"24",

);


$doc1 = new Jerga($doc, $millenial);

echo "Texto original";
echo "<br>";
echo $doc1->getDoc();
echo "<br>";
echo "<br>";
echo "Traducción millenial";
echo "<br>";
echo $doc1->traducir();
echo "<br>";
echo "<br>";
echo "Traducción chino";
echo "<br>";
$doc1->setJerga($chino);
echo $doc1->traducir();
