<?php
require_once "fonctions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Convertisseur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Mon convertisseur</h1>
    <form action="convertisseur.php" method="post">
        <p>
            <label for="montant">Montant en dinars</label>
            <input type="text" id="montant" name="montant" value="<?php if(isset($_POST["montant"])){echo $_POST["montant"];} ?>">
        </p>
        <p>
            <label for="devise">Devise</label>
            <select name="devise" id="devise">
                <option value="Euro" <?php if(isset($_POST["devise"]) and $_POST["devise"] == "Euro"){echo "selected";} ?>>Euro</option>
                <option value="Dollar" <?php if(isset($_POST["devise"]) and $_POST["devise"] == "Dollar"){echo "selected";} ?>>Dollar</option>
            </select>
        </p>
        <p>
            <button type="submit">Convertir</button>
        </p>
    </form>
    <?php
    if(empty($_POST["montant"])){
        echo '<div class="alert">Veuillez saisir le montant !</div>';
    }
    else{
        if(!is_numeric($_POST["montant"]) or $_POST["montant"] <= 0){
            echo '<div class="alert">Valeur invalide !</div>';
        }
        else{
            $devise = $_POST["devise"];
            $taux = $tauxConv[$devise];
            $valeur = convertDevise($_POST["montant"], $taux);
            echo '<div class="alert">'.$_POST["montant"].' dinars = '.$valeur.' '.$devise.'</div>';
        }
    }
    ?>
</body>
</html>