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
}