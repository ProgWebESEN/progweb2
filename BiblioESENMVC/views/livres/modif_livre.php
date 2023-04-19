<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modifier un livre</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <?php
    require_once $ROOT . $DS . "views/includes/header.php";
    ?>

    <div class="container">
        <h1>Modifier un livre</h1>
        <form action="index.php?controller=livre&action=modif2" method="get">
            <p>
                <label for="id_livre">Identifiant du livre</label>
                <input type="text" name="id_livre" id="id_livre" value="<?= $livre->id_livre ?>" readonly>
            </p>
            <p>
                <label for="titre">Titre du livre</label>
                <input type="text" name="titre" id="titre" value="<?= $livre->titre ?>">
            </p>
            <p>
                <label for="annee">Année d'apparition du livre</label>
                <input type="text" name="annee" id="annee" value="<?= $livre->annee_apparition ?>">
            </p>
            <input type="hidden" name="controller" value="livre">
            <input type="hidden" name="action" value="modif2">
            <p>
                <button type="submit">Modifier</button>
            </p>
        </form>
    </div>

    <?php
    require_once $ROOT . $DS . "views/includes/footer.php";
    ?>
    
</body>
</html>