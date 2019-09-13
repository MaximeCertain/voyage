<?php
header('Content-Type: application/json');

require 'database.php';
require 'api/ville.php';
require 'api/type.php';
require 'api/periode.php';
require 'api/mois.php';
require 'api/continent.php';

$ville = new ville();
$type = new type();
$periode = new periode();
$mois = new mois();
$continent = new continent();
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/voyage/api.php/villes' :
        $villes =  $ville->getVilles();
        echo $villes;
        break;
    case '/voyage/api.php/mois' :
        echo $mois->getMois();
        break;
    case '/voyage/api.php/types' :
        echo $type->getTypes();
        break;
    case '/voyage/api.php/continents' :
       echo $continent->getContinents();
        break;
    default:
        echo $request;
        echo 'l\'url n\'est pas valide';
        break;
}