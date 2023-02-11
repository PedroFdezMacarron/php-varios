
<?php

require_once 'util.php';

class Jerga
{

    private $sustitutions;
    private string $doc;
    private string $resultado;


    public function __construct(string $doc, $sustitutions)
    {
        $this->doc = $doc;
        $this->sustitutions = $sustitutions;        
    }

    function setJerga($sust){
        $this->sustitutions = $sust;
    }

    public function getDoc(){
        return $this->doc;
    }
    
    function traducir()
    {
        $this->resultado = "";
        $word = "";
        $positionText = 0;
        $newWord = "";
        $lenDoc = strlen($this->doc);

        while ($positionText < $lenDoc) {
            $character = substr($this->doc, $positionText, 1);
            $positionText++;
            if ($character == ' ' || $positionText === $lenDoc || $character == ','|| $character == '.'  )  {

                wordTranslate($word,$this->sustitutions);
               
                $this->resultado = $this->resultado . $word .$character;

                $word = "";
            } else {
                $word = $word . $character;
            }
        }
        return $this->resultado;
    }
    
}
