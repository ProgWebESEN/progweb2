<?php
/**
 * Ce fichier présente le code source de l'exemple 1 du cours
 * Requête 1 s'exécute correctement
 * Requête 2 non
 * Sans utilisation des transactions
 */
// Inclure le fichier
require_once "fonctions.php";
// Se connecter à la base de données
$db = connexionDB();
// Initialisation des variables
$compteDebiteur = 1;
$compteCrediteur = 20; // Ce compte n'existe pas!
$montant = 100;
// Requête permettant de débiter le premier compte
$sqlDebit = "UPDATE compte SET solde = solde - $montant WHERE id = $compteDebiteur";
// Requête permettant de créditer le second compte
$sqlCredit = "UPDATE compte SET solde = solde + $montant WHERE id = $compteCrediteur";
// Exécution des requêtes
try{
    $db->exec($sqlDebit);
    $db->exec($sqlCredit);
    echo "<p>Opération réussite.</p>";
}
catch(PDOException $ex){
    die($ex->getMessage());
}
?>