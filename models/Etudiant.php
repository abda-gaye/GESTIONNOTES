<?php
class Etudiant
{
    //connexion
    private $connexion;
    private $table = "etudiant";

    //proprietes
    public $id;
    public $nom;
    public $prenom;
    public $numero;
    public $date_naissance;

    /**
     * constructeur avec $db pour la connexion
     * @param $db
     */
    public function __construct($db) {
        $this->connexion = $db;
    }
    /**
     * affichage des Etudiant
     *@return
     */
    public function afficherEtudiant(){
        $sql = "SELECT * FROM ".$this->table." LIMIT 4";
        $query = $this->connexion->prepare($sql);
        $query->execute();
        return $query;
    }

    
}


