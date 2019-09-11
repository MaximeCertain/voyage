<?php

header('Content-Type: application/json');
//fichier de connexion à la base voyage
class database
{
    private $host ="localhost";
    private $db_name = "voyage";
    private $username = "root";
    private $password ="root";
    private $conn;

    public function  getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }
        catch(PDOException $exception){
            echo "erreur de connexion";
        }
        return $this->conn;
    }
}