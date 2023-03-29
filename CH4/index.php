<?php
// Inclure le fichier
require_once "fonctions.php";
// Se connecter à la base de données
$db = connexionDB();
// Créer une chaîne de caractère contenant la requête à exécuter
$sql = "SELECT * FROM livre";
try{
    $resultat = $db->query($sql); // Exécuter la requêtes SQL
}
catch(PDOException $ex){
    die($ex->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livres de l'ESEN</title>
</head>
<body>
    
    <h1>Liste des livres de l'ESEN</h1>

    <p>Nombre de livres trouvés : <?= $resultat->rowCount() ?></p>

    <p><a href="ajout_livre.html">Ajouter un livre</a></p>

    <?php
    while($livre = $resultat->fetchObject()){
    ?>
    <div>
        <h3>Titre : <?= $livre->titre ?></h3>
        <p>Année d'appatition : <?= $livre->annee_apparition ?></p>
        <p>
        <a href="modif_livre.php?id_livre=<?= $livre->id_livre ?>">Modifier</a> || 
        <a href="supprimer_livre.php?id_livre=<?= $livre->id_livre ?>" onclick="return confirm('êtes-vous sûrs ?')">Supprimer</a>
        </p>
        <hr>
    </div>
    <?php
    }
    // Libérer les ressources
    $resultat->closeCursor();
    // Fermer la connexion avec la base de données
    $db = null;
    ?>
</body>
</html>