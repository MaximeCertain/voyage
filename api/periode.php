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
}