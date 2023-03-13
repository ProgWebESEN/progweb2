<?php
class Voiture {

    public $marque;
    public $modele;
    public $annee;
    public $vitesse = 0;

    public function demarrer(){
        echo "<p>La voiture démarre</p>";
        $this->vitesse = 10;
    }

    public function accelerer($vitesse){
        $this->vitesse += $vitesse;
    }

    public function ralentir($vitesse){
        $this->vitesse -= $vitesse;
    }

    public function arreter(){
        echo "<p>La voiture s'arrête</p>";
        $this->vitesse = 0;
    }

    public function afficherVitesse(){
        echo "<p>La vitesse actuelle est : " . $this->vitesse . "</p>";
    }
}
?>