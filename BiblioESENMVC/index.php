<?php
session_start();
// Déclaration des variables utiles
$ROOT = __DIR__; // Chemin complet du projet
$DS = DIRECTORY_SEPARATOR; // Séparateur utilisé selon le système d'exploitation

// Récupérer le nom du contrôlleur et l'action
if(!empty($_GET["controller"])){
    $controller = $_GET["controller"];
}
else{
    $controller = "livre";
}

if(!empty($_GET["action"])){
    $action = $_GET["action"];
}
else{
    $action = "lister";
}

// Fichier à inclure
$file = $ROOT . $DS . "Controller" . $DS . ucfirst($controller) . "Controller.php";
if(file_exists($file)){
    require_once $file;
}
else{
    die("Controlleur introuvable!");
}


// Exemple de requête (URL) à exécuter
// 127.0.0.1/biblio/ajout_livre.php

//127.0.0.1/biblio/index.php?controller=livre&action=ajout
//127.0.0.1/biblio/index.php?controller=livre&action=delete
//127.0.0.1/biblio/index.php?controller=livre&action=update

//127.0.0.1/biblio/index.php?controller=auteur&action=delete
