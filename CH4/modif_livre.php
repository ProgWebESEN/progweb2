<?php
// Inclure le fichier
require_once "fonctions.php";
// Se connecter à la base de données
$db = connexionDB();
if(empty($_GET["id_livre"])){
    die("Veuillez indiquer l'identifiant du livre");
}
// Récupérer l'identifiant du livre
$id_livre = (int)$_GET["id_livre"];
// Créer une chaîne de caractère contenant la requête à exécuter
$sql = "SELECT * FROM livre where id_livre = $id_livre";
try{
    $resultat = $db->query($sql); // Exécuter la requêtes SQL
    if($resultat->rowCount() == 1){
        $livre = $resultat->fetchObject();
    }
    else{
        echo "<p>Le livre que vous cherchez n'existe pas!</p>";
    }
}
catch(PDOException $ex){
    die($ex->getMessage());
}
finally{
    // Libérer les ressources
    $resultat->closeCursor();
}
// Fermer la connexion avec la base de données
$db = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modifier un livre</title>
</head>
<body>

    <h1>Modifier un livre</h1>

    <form action="modif_livre2.php" method="get">
        <p>
            <label for="id_livre">Identifiant du livre</label>
            <input type="text" name="id_livre" id="id_livre" value="<?= $livre->id_livre ?>" readonly>
        </p>
        <p>
            <label for="titre">Titre du livre</label>
            <input type="text" name="titre" id="titre" value="<?= $livre->titre ?>">
        </p>
        <p>
            <label for="annee">Année d'apparition du livre</label>
            <input type="text" name="annee" id="annee" value="<?= $livre->annee_apparition ?>">
        </p>
        <p>
            <button type="submit">Modifier</button>
        </p>
    </form>
    
</body>
</html>