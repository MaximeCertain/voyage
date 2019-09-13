<?php


class type
{
    //liste des types à utiliser dans une combo box
    public function getTypes(){
        $database = new database;
        $connection = $database->getConnection();
        $request = $connection->prepare("select * from type ");
        $request->execute();
        $resultat = $request->fetchAll();
        return json_encode($resultat);
    }
    public function deleteCityLink($idVille){
        $database = new database;
        $connection = $database->getConnection();
        $sql = "DELETE FROM avoir WHERE idVille =" .$idVille."";

        $request = $connection->prepare($sql);
        $request->execute();
        return true ;
    }

    public function deleteVoyage($idVille, $idType){
        $database = new database;
        $connection = $database->getConnection();
        $sql = "DELETE FROM avoir WHERE idVille =" .$idVille." and idType = ".$idType."";

        $request = $connection->prepare($sql);
        $request->execute();
        return true ;
    }
    public function updateVoyage($idVille, $idType, $budget, $duree){
        $database = new database;
        $connection = $database->getConnection();
        $sql = "update avoir set budget =".$budget.", duree =".$duree.", idType = ".$idType." WHERE idVille =" .$idVille." and idType = ".$idType."";
        $request = $connection->prepare($sql);
        $request->execute();
        return true ;
    }
    public function createVoyage($idVille, $idType, $budget, $duree){
        $database = new database;
        $connection = $database->getConnection();
        $sql = "INSERT INTO avoir VALUES ($idVille, $idType, '".$budget."', '".$duree."')";
        $request = $connection->prepare($sql);
        $request->execute();
        return true ;
    }
    //détail d'une ville selon son Id
    public function getVoyageById($idVille, $idType)
    {
        $database = new database;
        $connection = $database->getConnection();
        $sql = ("select * from avoir inner join type on avoir.idType = type.id
   inner join ville on ville.id = avoir.idVille WHERE idVille = ".$idVille." and idType = ".$idType."");
        $request = $connection->prepare($sql);
        $request->execute();
        $resultat = $request->fetch();

        return ($resultat);
    }

    public function getVoyageForCity($idVille){
        $database = new database;
        $connection = $database->getConnection();
        $sql = "select * from avoir inner join ville on avoir.idVille = ville.id inner join type on avoir.idType = type.id
 where avoir.idVille = " .$idVille."";

        $request = $connection->prepare($sql);
        $request->execute();
        $resultat = $request->fetchAll();
        return json_encode($resultat);
    }


}