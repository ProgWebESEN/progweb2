<?php
require_once "Model.php";

class Livre extends Model{

    public $id_livre;
    public $titre;
    public $annee_apparition;

    protected $table = "livre";
    protected $clePrimaire = "id_livre";

}
?>