<?php
class Database
{   private $host = "127.0.0.1";
    private $db_name = "gestion_notes";
    private $password = "5423488ag";
    private $username="root";
    public $connexion;
    public function getConnection()
    {
        $this->connexion = null;
        try {
                $this->connexion = new PDO("mysql:host =".$this->host.";
                dbname=".$this->db_name,$this->username,$this->password);
        } catch (PDOException $e) {

            die("erreur de connexion :".$e->getMessage());
        }
        return $this->connexion; 
    }

}