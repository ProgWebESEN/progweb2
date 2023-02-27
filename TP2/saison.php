<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Exercice 3</title>
	</head>
	<body>
		<?php
		// Déclaration d'un tableau vide
		$mois = [];
		// Remplissage du tableau
		for($i = 0; $i < 12; $i++){
			$mois[$i] = rand(1, 12);
		}
		// Affichage simple
		print_r($mois);
		// Affichage du nom de la saison correspondant à la case dans le tableau
		for($i = 0; $i < 12; $i++){
			switch($mois[$i]){
				case 12:
				case 1:
				case 2:
					echo "<p>" . ($i + 1) . "=>" . $mois[$i] . " : Hiver</p>";
					break;
				case 3:
				case 4:
				case 5:
					echo "<p>" . ($i + 1) . "=>" . $mois[$i] . " : Printemps</p>";
					break;
				case 6:
				case 7:
				case 8:
					echo "<p>" . ($i + 1) . "=>" . $mois[$i] . " : Été</p>";
					break;
				default:
					echo "<p>" . ($i + 1) . "=>" . $mois[$i] . " : Automne</p>";
					break;
			}
		}
		?>
	</body>
</html>
