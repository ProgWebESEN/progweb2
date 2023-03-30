<?php
/**
 * Ce fichier présente le code source de l'exemple 1 du cours
 * Requête 1 s'exécute correctement
 * Requête 2 s'exécute correctement
 * Utilisation des transactions
 */
// Inclure le fichier
require_once "fonctions.php";
// Se connecter à la base de données
$db = connexionDB();
// Initialisation des variables
$compteDebiteur = 1;
$compteCrediteur = 3;
$montant = 100;
// Requête permettant de débiter le premier compte
$sqlDebit = "UPDATE compte SET solde = solde - $montant WHERE id = $compteDebiteur AND solde - $montant >= 0";
// Requête permettant de créditer le second compte
$sqlCredit = "UPDATE compte SET solde = solde + $montant WHERE id = $compteCrediteur";
// Exécution des requêtes
try{
    // Désactiver le mode auto-commit (sauvegarde automatique)
    $db->beginTransaction();
    $resultat1 = $db->exec($sqlDebit);
    $resultat2 = $db->exec($sqlCredit);
    if($resultat1 + $resultat2 == 2){
        $db->commit(); // Validation
        echo "<p>Opération réussite.</p>";
    }
    else{
        $db->rollBack(); // Annulation
        echo "<p>Opération annulée.</p>";
    }
}
catch(PDOException $ex){
    die($ex->getMessage());
}
?>