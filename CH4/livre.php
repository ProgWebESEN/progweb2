<?php
// Inclure le fichier
require_once "fonctions.php";
// Se connecter à la base de données
$db = connexionDB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Afficher un livre</title>
</head>
<body>

    <h1>Afficher un livre</h1>

    <form action="livre.php" method="get">
        <p>
            <label for="id_livre">Identifiant du livre</label>
            <input type="text" name="id_livre" id="id_livre" value="<?php if(isset($_GET["id_livre"])){echo $_GET["id_livre"];} ?>">
            <button type="submit">Afficher</button>
        </p>
    </form>
    <?php
    if(empty($_GET["id_livre"])){
        echo "<p>Veuillez indiquer l'identifiant du livre</p>";
    }
    else{
        // Récupérer l'identifiant du livre
        $id_livre = (int)$_GET["id_livre"];
        // Créer une chaîne de caractère contenant la requête à exécuter
        $sql = "SELECT * FROM livre where id_livre = $id_livre";
        try{
            $resultat = $db->query($sql); // Exécuter la requêtes SQL
            if($resultat->rowCount() == 1){
                $livre = $resultat->fetchObject();
                echo "<h3>Titre du livre : ".$livre->titre."</h3>";
                echo "<p>Année d'apparition : ".$livre->annee_apparition."</p>";
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
    }
    // Fermer la connexion avec la base de données
    $db = null;
    ?>
    
</body>
</html>