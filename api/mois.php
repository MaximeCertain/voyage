<?php


class mois
{
    //donne les temperatures selon les mois pour une ville
    public function getMois(){
        $database = new database;
        $connection = $database->getConnection();
        $request = $connection->prepare("select * from mois ");
        $request->execute();
        $resultat = $request->fetchAll();
        return json_encode($resultat);
    }
}