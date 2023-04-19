<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un livre</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
    <?php
    require_once $ROOT . $DS . "views/includes/header.php";
    ?>

    <div class="container">
        <h1>Ajouter un nouveau livre</h1>

        <form action="index.php?controller=livre&action=ajout2" method="get">
            <p>
                <label for="titre">Titre du livre</label>
                <input type="text" name="titre" id="titre">
            </p>
            <p>
                <label for="annee">Année d'apparition du livre</label>
                <input type="text" name="annee" id="annee">
            </p>
            <input type="hidden" name="controller" value="livre">
            <input type="hidden" name="action" value="ajout2">
            <p>
                <button type="submit">Enregistrer</button>
            </p>
        </form>
    </div>

    <?php
    require_once $ROOT . $DS . "views/includes/footer.php";
    ?>

</body>
</html>