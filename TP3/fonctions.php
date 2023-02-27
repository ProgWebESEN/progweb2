<?php
function ajout($valeur1, $valeur2){
    if($valeur1 !=="" and $valeur2 !== ""){
        return $valeur1 + $valeur2;
    }
    else{
        return "Valeur non définie!";
    }
}
?>