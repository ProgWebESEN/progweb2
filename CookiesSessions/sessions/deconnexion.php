<?php
// Démarrer la session
session_start();
// Supprimer la session
if(isset($_SESSION["nom"])){
    unset($_SESSION["nom"]);
    echo "A bientôt :)";
    // Si vous voulez rediriger l'utilisateur vers la page de connexion de nouveau
    header("location:connexion.php");
}
?>