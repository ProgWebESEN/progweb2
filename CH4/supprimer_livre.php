<?php
// Inclure le fichier
require_once "fonctions.php";
// Se connecter à la base de données
$db = connexionDB();
// Vérifier si le formulaire a bien été rempli
if(empty($_GET["id_livre"]) or !is_numeric($_GET["id_livre"])){
    die("Veuillez indiquer l'identifiant du livre à supprimer!");
}
$id_livre = (int)$_GET["id_livre"];
// Créer une chaîne de caractère contenant la requête à exécuter
$sql = "DELETE FROM livre WHERE id_livre = $id_livre";
try{
    $resultat = $db->exec($sql);
    if($resultat){
        echo "<p>Bravo! Ce livre a bien été supprimé.</p>";
    }
    else{
        echo "<p>Livre introuvable!!!</p>";
    }
}
catch(PDOException $ex){
    die($ex->getMessage());
}
// Fermer la connexion avec la base de données
$db = null;
?>