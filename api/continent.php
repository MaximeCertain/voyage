<?php


class continent
{
    //donne les temperatures selon les mois pour une ville
    public function getContinents(){
        $database = new database;
        $connection = $database->getConnection();
        $request = $connection->prepare("select * from continent ");
        $request->execute();
        $resultat = $request->fetchAll();
        return json_encode($resultat);
    }
}