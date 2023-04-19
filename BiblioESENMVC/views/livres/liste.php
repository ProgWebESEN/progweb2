<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livres de l'ESEN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <?php
    
    require_once $ROOT . $DS . "views/includes/header.php";
    ?>
    
    <div class="container">
        <h1>Liste des livres de l'ESEN</h1>

        <p>Nombre de livres trouvés : <?= count($listeLivres) ?></p>

        <p><a href="index.php?controller=livre&action=ajout">Ajouter un livre</a></p>

        <?php
        foreach($listeLivres as $livre){
        ?>
        <div>
            <h3>Titre : <?= $livre->titre ?></h3>
            <p>Année d'appatition : <?= $livre->annee_apparition ?></p>
            <p>
            <a href="index.php?controller=livre&action=modif&id_livre=<?= $livre->id_livre ?>">Modifier</a> || 
            <a href="index.php?controller=livre&action=delete&id_livre=<?= $livre->id_livre ?>" onclick="return confirm('êtes-vous sûrs ?')">Supprimer</a>
            </p>
            <hr>
        </div>
        <?php
        }
        ?>
    </div>

    <?php
    require_once $ROOT . $DS . "views/includes/footer.php";
    ?>
</body>
</html>