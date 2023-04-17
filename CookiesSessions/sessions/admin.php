<?php
// Démarrer la session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page d'administration</title>
</head>
<body>
    <?php
    if(isset($_SESSION["nom"])){
        echo "<h1>Bonjour, " . $_SESSION["nom"] . ". Vous êtes connecté!</h1>";
        echo "<a href=\"deconnexion.php\">Déconnexion</a>";
    }
    else{
        echo "<h1>Vous n'êtes pas autorisé à accéder à cette interface!!!</h1>";
    }
    ?>
</body>
</html>