<?php
require_once "Voiture.php";
$voiture = new Voiture();
$voiture->demarrer();
$voiture->accelerer(50);
$voiture->ralentir(10);
$voiture->arreter();
$voiture->afficherVitesse();
?>