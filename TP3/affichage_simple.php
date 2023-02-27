<?php
// Initialisation du contenu du tableau
$personnes = [
    'Directeur'=> ["prenom"=> "Mohamed", "nom"=> "Ali", "age"=> 55, "ville"=> "Tunis"],
    'Financier'=> ["prenom"=> "Fahima", "nom"=> "Kadhi", "age"=> 52, "ville"=> "Sousse"],
    'Comptable'=> ["prenom"=> "Halima", "nom"=> "Ben Ahmed", "age"=> 38, "ville"=> "Kef"],
    'Informaticien'=> ["prenom"=> "Ahmed", "nom"=> "EL Kefi", "age"=> 33, "ville"=> "Jendouba"],
    'Secretaire'=> ["prenom"=>"Samiha", "nom"=>"Attia", "age"=>46, "ville"=>"Gabes"],
    'Chauffeur'=> ["prenom"=>"Halim", "nom"=>"Ben Slama","age"=>27,"ville"=>"Beja"],
];
// Déclaration de la fonction
function afficherTableau($tableau){
    echo "<table border=1>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Age</th>
            <th>Ville</th>
        </tr>";
    foreach($tableau as $poste=> $details){
        echo "<tr>
            <td>" . $details["prenom"] . "</td>
            <td>" . $details["nom"] . "</td>
            <td>" . $details["age"] . "</td>
            <td>" . $details["ville"] . "</td>
        </tr>";
    }
    echo "</table>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TP3 - Exercice 1</title>
</head>
<body>
    <?php
    // Appel de la fonction permettant d'afficher le contenu du tableau
    afficherTableau($personnes);
    ?>
</body>
</html>