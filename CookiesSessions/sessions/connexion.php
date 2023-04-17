<?php
// Démarrer la session
session_start();
// Vérifier si le formulaire a bien été envoyé
if(!empty($_GET["nom"])){
    $_SESSION["nom"] = $_GET["nom"];
    // Redirection vers la page d'administration
    header("location:admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page de connexion</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="nom">Votre nom</label>
            <input type="text" name="nom">
        </p>
        <p>
            <input type="submit" value="Connexion">
        </p>
    </form>
</body>
</html>