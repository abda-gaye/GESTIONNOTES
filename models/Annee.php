<?php
class Etudiant
{
    //connexion
    private $connexion;
    private $table = "annee_scolaire";

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
        $sql = "SELECT * FROM ".$this->table;
        $query = $this->connexion->prepare($sql);
        $query->execute();
        return $query;
    }

    
}

