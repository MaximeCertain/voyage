<?php

class ville
{
    //liste de villes
    public function getVilles(){
        $database = new database;
       $connection = $database->getConnection();
        $request = $connection->prepare("select ville.nom as villeNom, avoir.duree as dureeVoyage, avoir.budget as budgetVoyage, ville.image as villeImage, type.libelle as typeLibelle, type.id as typeId, ville.id as villeId
from ville inner join avoir on avoir.idVille = ville.id INNER JOIN type on type.id = avoir.idType ");
        $request->execute();
        $resultat = $request->fetchAll();
        return json_encode($resultat);
    }
    //liste des villes selon critères
    //theme   tempaerture budget  temps de vol max
    //remplacer 10 et 20 par les valeurs min et max
    public function getVillesByOptions($dureeMin, $dureeMax, $temperatureMin, $temperatureMax, $budgetMin, $budgetMax, $idType, $mois){
        $database = new database;
        $connection = $database->getConnection();
        $request = $connection->prepare("select ville.nom as villeNom, avoir.duree as dureeVoyage, avoir.budget
 as budgetVoyage, ville.image as villeImage, type.libelle as typeLibelle, type.id as typeId, ville.id as villeId
from ville inner join avoir on avoir.idVille = ville.id INNER JOIN type on type.id = avoir.idType 
INNER JOIN periode on periode.idVille = ville.id
WHERE avoir.duree and ".$dureeMin." AND ".$dureeMax."
and avoir.budget BETWEEN ".$budgetMin." and ".$budgetMax."
and periode.temperature BETWEEN ".$temperatureMin." and ".$temperatureMax." 
 and periode.mois = ".$mois." and type.id = ".$idType." ");
        $request->execute();
        $resultat = $request->fetchAll();
        return json_encode($resultat);
    }
}