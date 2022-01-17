<!-- /**
     * DEFINIRE CLASSE Film:
     *      Attributi:
     *      - titolo
     *      - sottotiolo
     *      - regista
     * 
     *      Metodi:
     *      - costruttore che accetta titolo
     *      - getFullTitle: 
     *          Se sottotitolo presente:
     *            restituisce "titolo: sottotitolo" 
     *          Se sottotiolo assente:
     *            restituisce "titolo" 
     *      - __toString: 
     *          Se regista presente:
     *            restituisce "fullTitle | regista"
     *          Se regista assente:
     *            restituisce "fullTitle | ???"
     * 
     * UTILIZZO OGGETTI Film:
     * 
     *      Generare 3 istanze della classe Film:
     *      - uno con solo il titolo
     *      - uno con titolo e sottotitolo
     *      - uno con titolo, sottotiolo e regista
     * 
     *      Stampare tutti gli oggetti tramite toString (implicito)
     * 
     *  RISULTATO ATTESO:
     * 
     *      Matrix | ???
     *      Fantozzi 2: il ritorno di fantozzi | ???
     *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
     */ -->

<?php

    class Film {

        public $titolo;
        public $sottotitolo;
        public $regista;

        public function __construct($title) {
           
            $this -> titolo = $title;
    
        }

        public function getFullTitle() {
            if($this->sottotitolo){
                return $this -> titolo . " :" . $this -> sottotitolo;
            }else{
                return  $this -> titolo;
            } 
        }  
        
        public function __toString(){
            if($this -> regista){
                return $this -> getFullTitle() . " :" . $this -> regista;
            }else{
                return  $this -> getFullTitle() . " | ??";
            }   
        }
        
    }

    $film1 = new Film("Matrix");
    $film2 = new Film("fantozzi 2");
    $film3 = new Film("peter pan");

    $film2 -> sottotitolo = "il ritorno di fantozzi";
    $film3 -> sottotitolo = "il ritorno all'isola che non c'è";
    $film3 -> regista = "robin budd";

    echo "film 1 " . $film1 ->getFullTitle() . "<br>";
    echo "film 2 " . $film2 ->getFullTitle() . "<br>";
    echo $film3;
?>