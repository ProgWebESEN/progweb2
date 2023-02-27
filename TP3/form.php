<?php
require_once "fonctions.php";
if(isset($_GET["val1"])){
    $val1 = (int)$_GET["val1"];
}
else{
    $val1 = "";
}
if(isset($_GET["val2"])){
    $val2 = (int)$_GET["val2"];
}
else{
    $val2 = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TP3 - Exercice 2</title>
</head>
<body>
    <form action="form.php" method="GET">
        <p>
            <label for="val1"><strong>Valeur 1 :</strong></label>
            <input type="text" name="val1" id="val1" value="<?= $val1 ?>">
        </p>
        <p>
            <label for="val2"><strong>Valeur 2 :</strong></label>
            <input type="text" name="val2" id="val2" value="<?= $val2 ?>">
        </p>
        <p>
            <label for="resultat"><strong>Résultat :</strong></label>
            <input type="text" name="resultat" id="resultat" value="<?= ajout($val1, $val2) ?>" readonly>
        </p>
        <p>
            <button type="submit">Calculer</button>
        </p>
    </form>
</body>
</html>