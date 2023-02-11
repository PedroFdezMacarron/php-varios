<?php

function wordTranslate(&$word,$dictionary){
        
    if (array_key_exists($word, $dictionary)) {
        $word = $dictionary[$word];    
    }   

}
