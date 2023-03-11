<?php
// Inclure le fichier de classe
require_once "Livre.class.php";
// Créer une instance
$livre = new Livre();
// Afficher le contenu de la variable $livre
echo $livre;
// Récupérer les données du formulaire
$titre = "";
$annee = "";
if(!empty($_GET["titre"])){
    $titre = $_GET["titre"];
}
if(!empty($_GET["annee"])){
    $annee = $_GET["annee"];
}
// Modifier le titre et l'année d'apparition
$livre->setTitre($titre);
$livre->setAnneeApparition($annee);
// Afficher le contenu de la variable $livre
echo $livre;
?>