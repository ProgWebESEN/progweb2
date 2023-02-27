<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Exercice 1</title>
	</head>
	<body>
		<?php
		$age = 22;
        $sexe = "F";
        if(strtolower($sexe) == "f" and $age >=21 and $age <=40){
            echo "<p>Bonjour Madame, vous avez entre 21 et 40 ans.</p>";
        }
        else{
            echo "<p>Désolé, vous ne remplissez pas les conditions.</p>";
        }
		?>
	</body>
</html>
