<?php
require_once "Model.php";

class Auteur extends Model{

    public $id;
    public $nom;
    public $pays;

    protected $table = "auteur";
    protected $clePrimaire = "id";
    
}
?>