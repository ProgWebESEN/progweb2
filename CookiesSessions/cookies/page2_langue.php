<?php
$messages = [
    "fr" => "Contenu de la deuxième page",
    "en" => "Second page content",
    "ar" => "محتوى الصفحة الثانية"
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site Multi-langues</title>
</head>
<body>
    <h1>
        <?php echo $messages[$langueSite]; ?>
        <a href="site_langues.php">Page 1</a>
    </h1>
</body>
</html>