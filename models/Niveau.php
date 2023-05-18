<?php

class Niveau
{
    //connexion
    public $connexion;
    private $table = "niveau";

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
    public function afficherNiveau(){
        $sql = "SELECT * FROM ".$this->table;
        $query = $this->connexion->prepare($sql);
        $query->execute();
        $resultats=$query->fetchAll(PDO::FETCH_ASSOC);
        return $resultats;
    }

    
}
