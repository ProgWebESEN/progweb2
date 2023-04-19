<?php
/**
 * Ce fichier représente le contrôleur de la table livre
 */
// Inclure le fichier
require_once $ROOT . $DS . "Model/Livre.php";
require_once $ROOT . $DS . "Model/Auteur.php";

// Exécuter l'action
switch($action){
    case "lister":
        $livre = new Livre();
        $listeLivres = $livre->getAll();
        require_once "views/livres/liste.php";
        break;
    case "ajout":
        require_once "views/livres/ajout_livre_form.php";
        break;
    case "ajout2":
        // Vérifier si le formulaire a bien été rempli
        if(empty($_GET["titre"]) or empty($_GET["annee"])){
            die("Veuillez remplir tous les champs!");
        }
        $titre = $_GET["titre"];
        $annee = (int)$_GET["annee"];
        $livre = new Livre();
        $resultat = $livre->insert([
            "titre" => $titre,
            "annee_apparition" => $annee
        ]);
        require_once "views/livres/ajout_livre.php";
        break;
    case "modif":
        if(empty($_GET["id_livre"])){
            die("Veuillez indiquer l'identifiant du livre");
        }
        // Récupérer l'identifiant du livre
        $id_livre = (int)$_GET["id_livre"];
        $livre = new Livre();
        $livre = $livre->getById($id_livre);
        if($livre == false){
            die("Livre introuvable!");
        }
        require_once "views/livres/modif_livre.php";
        break;
    case "modif2":
        // Vérifier si le formulaire a bien été rempli
        if(empty($_GET["titre"]) or empty($_GET["annee"]) or empty($_GET["id_livre"])){
            die("Veuillez remplir tous les champs!");
        }
        $titre = $_GET["titre"];
        $annee = (int)$_GET["annee"];
        $id_livre = (int)$_GET["id_livre"];
        $livre = new Livre();
        $resultat = $livre->update([
            "titre" => $titre,
            "annee_apparition" => $annee
        ], $id_livre);
        require_once "views/livres/modif_livre2.php";
        break;
    case "delete":
        // Vérifier si le formulaire a bien été rempli
        if(empty($_GET["id_livre"]) or !is_numeric($_GET["id_livre"])){
            die("Veuillez indiquer l'identifiant du livre à supprimer!");
        }
        $id_livre = (int)$_GET["id_livre"];
        $livre = new Livre();
        $resultat = $livre->delete($id_livre);
        require_once "views/livres/supprimer_livre.php";
        break;
}
?>