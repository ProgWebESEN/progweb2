<?php
// Inclure le fichier
require_once "fonctions.php";
// Se connecter à la base de données
$db = connexionDB();
// Vérifier si le formulaire a bien été rempli
if(empty($_GET["titre"]) or empty($_GET["annee"]) or empty($_GET["id_livre"])){
    die("Veuillez remplir tous les champs!");
}
$titre = $db->quote($_GET["titre"]);
$annee = (int)$_GET["annee"];
$id_livre = (int)$_GET["id_livre"];
// Créer une chaîne de caractère contenant la requête à exécuter
$sql = "UPDATE livre SET titre = $titre, annee_apparition = $annee WHERE id_livre = $id_livre";
try{
    $resultat = $db->exec($sql);
    if($resultat){
        echo "<p>Bravo! Livre mis à jour avec succès.</p>";
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