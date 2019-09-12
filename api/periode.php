<?php


class periode
{
    //donne les temperatures selon les mois pour une ville
    public function getPeriodes($idVille){
        $database = new database;
        $connection = $database->getConnection();
        $request = $connection->prepare("select * from periode inner join mois on mois.id = periode.mois where idVille = ".$idVille." ");
        $request->execute();
        $resultat = $request->fetchAll();
        return json_encode($resultat);
    }
    //donne les temperatures selon les mois pour une ville
    public function isExistPeriode($idMois, $idVille){
        $database = new database;
        $connection = $database->getConnection();
        $sql =("select * from periode where idVille = ".$idVille." and mois = ".$idMois.";");
        $request = $connection->prepare($sql);
        $request->execute();
        $resultat = $request->rowCount();
       // var_dump($resultat);
       $resultat = ($resultat > 0) ? true : false;
        return $resultat ;
    }
    //donne les temperatures selon les mois pour une ville
    public function createPeriode($idMois, $idVille, $temperature){
        $database = new database;
        $connection = $database->getConnection();
        if($temperature == null)
            $temperature = "25";
        $sql = "INSERT into periode(mois,temperature,idVille)
VALUES($idMois, $temperature, $idVille)
";
        $request = $connection->prepare($sql);
        $request->execute();
        return true ;
    }
    //donne les temperatures selon les mois pour une ville
    public function updatePeriode($idMois, $idVille, $temperature){
        $database = new database;
        $connection = $database->getConnection();
        $request = $connection->prepare("
UPDATE periode
set temperature = ".$temperature."
where idVille = ".$idVille." and mois =".$idMois."");
        $request->execute();
        return true ;
    }


    //liste des types à utiliser dans une combo box
    public function getConnexion($email, $password){
        $database = new database;
        $connection = $database->getConnection();
        $sql = ("select * from user where email = '".$email."' and password ='".$password."'");
        $request = $connection->prepare($sql);
        $request->execute();
        $resultat = $request->rowCount();
        $resultat = ($resultat > 0) ? true : false;
        return $resultat ;
    }
    public function deleteCityPeriodes($idVille){
        $database = new database;
        $connection = $database->getConnection();
        $sql = "DELETE FROM periode WHERE idVille =" .$idVille."";
        $request = $connection->prepare($sql);
        $request->execute();
        return true ;
    }


}