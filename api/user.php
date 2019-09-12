<?php


class user
{
    //liste des types à utiliser dans une combo box
    public function getConnexion($email, $password){
        $database = new database;
        $connection = $database->getConnection();
        $request = $connection->prepare("select * from user where email =".$email."and password =".$password."");
        $request->execute();
        $resultat = $request->rowCount();
        $resultat = ($resultat > 0) ? true : false;
        return $resultat ;
    }

}