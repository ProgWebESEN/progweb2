<?php
// Inclure le fichier
require_once "fonctions.php";
// Se connecter à la base de données
$db = connexionDB();
// Vérifier si le formulaire a bien été rempli
if(empty($_GET["titre"]) or empty($_GET["annee"])){
    die("Veuillez remplir tous les champs!");
}
$titre = $db->quote($_GET["titre"]);
$annee = (int)$_GET["annee"];
// Créer une chaîne de caractère contenant la requête à exécuter
$sql = "INSERT INTO livre(titre, annee_apparition) VALUES($titre, $annee)";
try{
    $resultat = $db->exec($sql);
    if($resultat){
        echo "<p>Bravo! Ce livre a bien été ajouté.</p>";
        echo "<p>L'identifiant du livre est : ".$db->lastInsertId()."</p>";
    }
    else{
        echo "<p>Erreur!!!</p>";
    }
}
catch(PDOException $ex){
    die($ex->getMessage());
}
// Fermer la connexion avec la base de données
$db = null;
?>