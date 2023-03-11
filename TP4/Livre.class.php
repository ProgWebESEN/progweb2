<?php
class Livre {   // déclaration de la classe
    private $titre; // déclaration d’un attribut
    private $anneeApparition;   // déclaration d’un attribut

    /**
     * Permet de retourner la valeur de l'attribut titre s'il n'est pas 
     * vide et le message "titre non défini" dans le cas contraire
     */
    public function getTitre(){
        if(!empty($this->titre)){
            return $this->titre;
        }
        return "titre non défini";
    }
    /**
     * Permet de retourner la valeur de l'attribut anneeApparition 
     * s'il n'est pas vide et le message "année d'apparition non définie"
     * dans le cas contraire
     */
    public function getAnneeApparition(){
        if(!empty($this->anneeApparition)){
            return $this->anneeApparition;
        }
        return "année d'apparition non définie";
    }
    /**
     * Permet d'affecter la valeur de $titre à l'attribut titre, si 
     * la longueur de $titre est supérieure ou égale à 4
     */
    public function setTitre($titre){
        if(strlen($titre) >= 4){
            $this->titre = $titre;
        }
    }
    /**
     * Permet de convertir $annee en une variable de type integer, 
     * ensuite d'affecter la valeur de $annee à l'attribut anneeApparition, 
     * si elle est comprise entre 1980 et 2023
     */
    public function setAnneeApparition($annee){
        $annee = (int)$annee; // ou bien $annee = settype($annee, "int");
        if($annee >= 1980 and $annee <= 2023){
            $this->anneeApparition = $annee;
        }
    }
    /**
     * Permet de retourner une chaine de caractères, en utilisant les getteurs 
     * adéquats afin d'afficher par exemple : 
     * "Livre ayant le titre: mon livre est apparu en : 1987"
     */
    public function __toString(){
        return "<p>Livre ayant le titre: " . $this->getTitre() . " est apparu en : " . $this->getAnneeApparition() . "</p>";
    }
}
?>