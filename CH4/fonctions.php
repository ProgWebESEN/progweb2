<?php
/**
 * Connexion à la base de données
 */
function connexionDB(){
    try{
        $db = new PDO("mysql:host=localhost;dbname=biblio_esen", "root", "");
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
    catch(PDOException $exception){
        die($exception->getMessage());
    }
}
?>