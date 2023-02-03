<!DOCTYPE html>
<html lang="fr">
    <head>
   	 <meta charset="utf-8">
   	 <title>Opérations</title>
    </head>
    <body>
    <?php
    // Déclaration des variables
    $tva = 0.18;
    $prix = 15.2;
    $nombre = 10;
    // Calcul des résultats
    $prixHT = $prix * $nombre;
    $prixTTC = $prixHT * (1 + $tva);
    // Affichage des résultats
    echo "<p>Prix HT = $prixHT</p>";
    echo "<p>Prix TTC = $prixTTC</p>";
    echo "<p>Type de nombre = ". gettype($nombre) ."</p>";
    echo "<p>Type de prix = ". gettype($prix) ."</p>";
    ?>
    </body>
</html>