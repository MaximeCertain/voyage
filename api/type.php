<?php


class type
{
    public function getTypes(){
        $database = new database;
        $connection = $database->getConnection();
        $request = $connection->prepare("select * from type ");
        $request->execute();
        $resultat = $request->fetchAll();
        return json_encode($resultat);

    }
}