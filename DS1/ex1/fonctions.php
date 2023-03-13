<?php
function convertDevise($montant, $taux=1){
    return $montant * $taux;
}
$tauxConv = [
    "Euro"=> 3.4,
    "Dollar"=> 3.2
];
?>