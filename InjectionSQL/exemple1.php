<?php
/**
 * ========================================================
 * Ce fichier présente un exemple d'une requête vulnérable
 * ========================================================
 */
// Inclure le fichier
require_once "fonctions.php";
// Se connecter à la base de données
$db = connexionDB();
// Vérifier si le formulaire est soumis
if(isset($_GET["connexion"])){
    $login = $_GET["login"];
    $mot_passe = $_GET["mot_passe"];
    // Requête SQL à exécuter
    $sql = "SELECT * FROM utilisateur WHERE login = '$login' AND mot_passe = '$mot_passe'";
    echo "<p>$sql</p>";
    try{
        $resultat = $db->query($sql);
        echo "<h3>Nombre d'enregistrement : {$resultat->rowCount()}</h3>";
        $data = $resultat->fetchAll(PDO::FETCH_OBJ);
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    catch(PDOException $ex){
        die($ex->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Injection SQL autorisée</title>
    <style>
        input[type="text"]{
            width: 50%;
        }
        code{
            background-color: #efecec;
            padding: 5px 10px;
            border-radius: 2px;
            color: #7f0101;
        }
        ol > li{
            margin-bottom: 10px;
            line-height: 27px;
        }
    </style>
</head>
<body>
    <form action="exemple1.php" method="get">
        <p>
            <label for="login">Login</label>
            <input type="text" name="login" value="<?php if(isset($_GET["login"])){echo $_GET["login"];} ?>">
        </p>
        <p>
            <label for="mot_passe">Mot de passe</label>
            <input type="text" name="mot_passe" value="<?php if(isset($_GET["mot_passe"])){echo $_GET["mot_passe"];} ?>">
        </p>
        <p>
            <button type="submit" name="connexion">Se connecter</button>
        </p>
    </form>
    <div>
        <h4>Scénarios de test</h4>
        <ol>
            <li>
                Données valides : Login (<code>admin</code>) et mot de passe(<code>123456</code>)
            </li>
            <li>
                Dans le champ mot de passe, tapez le texte suivant : <code>' OR login = 'admin</code>
            </li>
            <li>
                Dans le champ mot de passe, tapez le texte suivant : <code>' OR '1' = '1</code>
            </li>
            <li>
                Créez la table <strong>copy</strong> qui a la même forme et le même contenu que la table <strong>utilisateur</strong>.<br>
                Vous pouvez tout simplement exécuter ce code <code>CREATE TABLE IF NOT EXISTS copy AS SELECT * FROM utilisateur.</code>
                Enfin, dans le champ mot de passe, tapez le texte suivant : <code>'; DELETE FROM copy WHERE '1' = '1</code>
            </li>
        </ol>
    </div>
</body>
</html>