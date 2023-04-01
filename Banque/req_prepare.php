<?php
/**
 * Ce fichier présente un exemple d'utilisation des requêtes préparées
 */
// Inclure le fichier
require_once "fonctions.php";
// Se connecter à la base de données
$db = connexionDB();
/**
 * ===========================================
 * ======= Méthode 1 =========================
 * ===========================================
 */
echo "<h2>Méthode 1</h2>";
// Requête SQL à exécuter
$sql = "SELECT * FROM compte WHERE nom = ? AND solde > ?";
// Créer une requête préparée
$requetePrepare = $db->prepare($sql);
try{
    // Exécuter la requête avec les valeurs à remplacer
    $requetePrepare->execute([
        "Client 1", 20
    ]);
    echo "<h4>Nombre de clients : " . $requetePrepare->rowCount() . "</h4>";
    while($client = $requetePrepare->fetchObject()){
        echo "<p>Nom : {$client->nom}. Solde : {$client->solde} Dinars.</p>";
    }
}
catch(PDOException $ex){
    die($ex->getMessage());
}
finally{
    $requetePrepare->closeCursor();
}
/**
 * ===========================================
 * ======= Méthode 2 =========================
 * ===========================================
 */
echo "<h2>Méthode 2</h2>";
// Requête SQL à exécuter
$sql = "SELECT * FROM compte WHERE solde > :montant";
// Créer une requête préparée
$requetePrepare = $db->prepare($sql);
try{
    // Exécuter la requête avec les valeurs à remplacer
    $requetePrepare->execute([
        ":montant" => 500
    ]);
    echo "<h4>Nombre de clients : " . $requetePrepare->rowCount() . "</h4>";
    while($client = $requetePrepare->fetchObject()){
        echo "<p>Nom : {$client->nom}. Solde : {$client->solde} Dinars.</p>";
    }
}
catch(PDOException $ex){
    die($ex->getMessage());
}
finally{
    $requetePrepare->closeCursor();
}
/**
 * ===========================================
 * ======= Méthode 3 =========================
 * ===========================================
 */
echo "<h2>Méthode 3</h2>";
// Requête SQL à exécuter
$sql = "SELECT * FROM compte WHERE solde > :montant";
// Créer une requête préparée
$requetePrepare = $db->prepare($sql);
// Faire la liaison entre les paramètres et leurs valeurs respectives
$montant = 500;
$requetePrepare->bindParam(":montant", $montant);
try{
    // Exécuter la requête
    $requetePrepare->execute();
    echo "<h4>Nombre de clients : " . $requetePrepare->rowCount() . "</h4>";
    while($client = $requetePrepare->fetchObject()){
        echo "<p>Nom : {$client->nom}. Solde : {$client->solde} Dinars.</p>";
    }
}
catch(PDOException $ex){
    die($ex->getMessage());
}
finally{
    $requetePrepare->closeCursor();
}
/**
 * ===========================================
 * ======= Méthode 4 =========================
 * Utilisation des requêtes préparées dans une boucle
 * ===========================================
 */
echo "<h2>Liste des clients</h2>";
// Requête SQL à exécuter
$sql = "SELECT * FROM compte WHERE id = :id";
// Créer une requête préparée
$requetePrepare = $db->prepare($sql);
// Liste des identifiants
$clients = [1, 2, 3];
try{
    foreach($clients as $id){
        // Faire la liaison entre les paramètres et leurs valeurs respectives
        $requetePrepare->bindParam(":id", $id);
        // Exécuter la requête
        $requetePrepare->execute();
        $client = $requetePrepare->fetchObject();
        echo "<p>Nom : {$client->nom}. Solde : {$client->solde} Dinars.</p>";
    }
}
catch(PDOException $ex){
    die($ex->getMessage());
}
finally{
    $requetePrepare->closeCursor();
}
?>