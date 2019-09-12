<?php

class ville
{
    //liste de villes
    public function getVilles()
    {
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
    public function getVillesByOptions($dureeMin, $dureeMax, $temperatureMin, $temperatureMax, $budgetMin, $budgetMax, $idType, $mois)
    {
        $database = new database;
        $connection = $database->getConnection();
//base de requete
        $sql = ("select ville.nom as villeNom, avoir.duree as dureeVoyage, avoir.budget
 as budgetVoyage, ville.image as villeImage, type.libelle as typeLibelle, type.id as typeId, ville.id as villeId
from ville inner join avoir on avoir.idVille = ville.id INNER JOIN type on type.id = avoir.idType 
INNER JOIN periode on periode.idVille = ville.id");
//condition
        $where = $this->getWhere($dureeMin, $dureeMax, $temperatureMin, $temperatureMax, $budgetMin, $budgetMax, $idType, $mois);
        $sql .= $where;
        $request = $connection->prepare($sql);
        $request->execute();
        $resultat = $request->fetchAll();
        return json_encode($resultat);
    }
    //détail d'une ville selon son Id
    public function getVilleById($idVille)
    {
        $database = new database;
        $connection = $database->getConnection();
//base de requete
        $sql = ("select ville.nom as villeNom, avoir.duree as dureeVoyage, avoir.budget as budgetVoyage,
 ville.image as villeImage, type.libelle as typeLibelle, type.id as typeId, ville.id as villeId from ville
  inner join avoir on avoir.idVille = ville.id INNER JOIN type on type.id = avoir.idType WHERE ville.id = ".$idVille."");
//condition
        $request = $connection->prepare($sql);
        $request->execute();
        $resultat = $request->fetch();
        return ($resultat);
    }

    //fonction qui ajoute des conditions selon les données envoyés par l'utilisateur pour la fonction publique getVillesByOptions
    private function getWhere($dureeMin, $dureeMax, $temperatureMin, $temperatureMax, $budgetMin, $budgetMax, $idType, $mois)
    {
        $where = "";
        $array = [];
        if ($dureeMin !== null and $dureeMax !== null) {
            array_push($array, "avoir.duree between " . $dureeMin . " AND " . $dureeMax . "");
        }
        if ($temperatureMin !== null and $temperatureMax !== null) {
            array_push($array, "periode.temperature BETWEEN " . $temperatureMin . " and " . $temperatureMax . "");
        }
        if ($budgetMin !== null and $budgetMax !== null) {
            array_push($array, "avoir.budget BETWEEN " . $budgetMin . " and " . $budgetMax . "");
        }
        if ($idType !== null) {
            array_push($array, "type.id = " . $idType . "");
        }
        if ($mois !== null) {
            array_push($array, "periode.mois = " . $mois . "");
        }
        $countArray = count($array);
        if ($countArray > 0) {
            //on assemble le where
            for ($i = 0; $i < $countArray; $i++) {
                if ($i == 0) {
                    $where = " where " . $array[$i];
                } else {
                    $where .= " and " . $array[$i];
                }
            }
        }
        $where .= " ; ";
        return $where;
    }
}