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

        public function __construct($titolo) {
           
            $this -> titolo = $titolo;
    
        }

        public function getFullTitle() {
            if($sottotitolo){
                return $this -> titolo . " :" . $this -> sottotitolo;
            }else{
                return  $this -> titolo;
            } 
        }  
        
        public function __toString(){
            if($regista){
                return $this -> getFullTitle() . " :" . $this -> regista;
            }else{
                return  $this -> getFullTitle() . " | ??";
            }   
        }
        
    }

    $film1 = new Film("Matrix");
    $film2 = new Film("fantozzi 2", );
    $film3 = new Film("peter pan", "il ritorno all'isola che non c'è", "robin budd");

    $film2 -> sottotitolo = "il ritorno di fantozzi";
?>