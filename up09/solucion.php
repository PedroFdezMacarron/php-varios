<?php

// Empieza aquí a escribir tu código PHP...


$alturas=5;


for ($piso = $alturas; $piso >= 1; $piso--) {

    echo "<pre>";    
    for($asterisco = 1; $asterisco <= $alturas; $asterisco++){

        if($asterisco<$piso){
            echo " ";
        }else{
            echo "* ";
        }
    }
    echo "</pre>";
    
}