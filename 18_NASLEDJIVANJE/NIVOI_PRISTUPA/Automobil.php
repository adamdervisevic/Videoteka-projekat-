<?php
    require_once "Vozilo.php";

    class Automobil extends Vozilo {
        private $brojVrata;

        public function __construct($j, $z, $p, $bv){
            //pozovi konstruktor iz klase Vozilo da postavi polja iz te klase
            parent::__construct($j, $z, $p); // ZAPAMTI OVO ZA PARENT!!!
            $this->brojVrata = $bv;
        }

        public function ispisAuto() {
            $this->ispis();

            echo "<p> Automobil:" .$this->javnoPolje. " " .   
            $this->zasticenoPolje //. " " . $this->privatnoPolje
            . " " . $this->brojVrata
            ."</p>";
        }
    }



?>