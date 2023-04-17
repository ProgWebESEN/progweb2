<?php
$messages = [
    "fr" => "Bienvenue sur mon site",
    "en" => "Welcome to my website",
    "ar" => "مرحبا بكم في موقع الويب الخاص بي"
];
// Configurer la langue du site
if(!isset($_COOKIE["langue"])){
    // Durée de la session = 30 jours
    setcookie("langue", "fr", time() + 60 * 60 * 24 * 30);
    $langueSite = "fr";
}
else{
    $langueSite = $_COOKIE["langue"];
}
// Changer la langue
$listeLangues = ["fr", "en", "ar"];
if(!empty($_GET["langue"]) and in_array($_GET["langue"], $listeLangues)){
    setcookie("langue", $_GET["langue"], time() + 60 * 60 * 24 * 30);
    $langueSite = $_GET["langue"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site Multi-langues</title>
</head>
<body>
    <form method="get" action="">
        <label for="langue">Langue</label>
        <select name="langue" id="langue">
            <option value="fr" <?php if($langueSite == "fr"){echo "selected=selected";} ?>>Français</option>
            <option value="en" <?php if($langueSite == "en"){echo "selected=selected";} ?>>English</option>
            <option value="ar" <?php if($langueSite == "ar"){echo "selected=selected";} ?>>العربية</option>
        </select>
        <button type="submit">Changer la langue</button>
    </form>
    <h1>
        <?php echo $messages[$langueSite]; ?>
        <a href="page2_langue.php">Page 2</a>
    </h1>
</body>
</html>