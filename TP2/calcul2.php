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
        $i = 1;
        while($i <= $nombre){
            echo $i;
            if($i < $nombre){
                echo "+";
            }
            $somme += $i;
            $i++;
        }
        echo " = $somme";
        echo "<p>--------------------------------</p>";
        // Deuxième solution
        $message = "La somme de ";
        $somme = 0;
        $i = 1;
        while($i <= $nombre){
            $message .= $i . "+";
            $somme += $i;
            $i++;
        }
        // Supprimer le dernier caractère de la chaîne
        $message = substr($message, 0, -1);
        $message .= " = $somme";
        echo $message;
        // Affichage des carrés
        $i = 1;
        while($i <= $nombre){
            echo "<li> $i<sup>2</sup> = " . pow($i, 2) . "</li>";
            $i++;
        }
		?>
	</body>
</html>
