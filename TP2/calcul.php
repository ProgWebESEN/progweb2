<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Exercice 2</title>
	</head>
	<body>
		<?php
		$nombre = 4;
        // Première solution
        echo "La somme de ";
        $somme = 0;
        for($i = 1; $i <= $nombre; $i++){
            echo $i;
            if($i < $nombre){
                echo "+";
            }
            $somme += $i;
        }
        echo " = $somme";
        echo "<p>--------------------------------</p>";
        // Deuxième solution
        $message = "La somme de ";
        $somme = 0;
        for($i = 1; $i <= $nombre; $i++){
            $message .= $i . "+";
            $somme += $i;
        }
        // Supprimer le dernier caractère de la chaîne
        $message = substr($message, 0, -1);
        $message .= " = $somme";
        echo $message;
        // Affichage des carrés
        for($i = 1; $i <= $nombre; $i++){
            echo "<li> $i<sup>2</sup> = " . pow($i, 2) . "</li>";
        }
		?>
	</body>
</html>
