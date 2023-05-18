<?php
class Classe
{
    //connexion
    private $connexion;
    private $table = "classe";

    //proprietes
    public $id;
    public $libelle;

    /**
     * constructeur avec $db pour la connexion
     * @param $db
     */
    public function __construct($db) {
        $this->connexion = $db;
    }
    /**
     * affichage des Classe
     *@return
     */
    public function afficherClasse(){
        $sql = "SELECT * FROM ".$this->table." LIMIT 4";
        $query = $this->connexion->prepare($sql);
        $query->execute();
        return $query;
    }

    
}


