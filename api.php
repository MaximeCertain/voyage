<?php
require 'database.php';
require 'api/ville.php';
require 'api/type.php';
require 'api/periode.php';
require 'api/mois.php';

$ville = new ville();
$type = new type();
$periode = new periode();
$mois = new mois();
$request = $_SERVER['REQUEST_URI'];
echo $request;
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
    case '/voyage/api.php/periode/?id' :
       echo 'periode';
       echo $_GET('id');
        break;
    default:
       echo 'l\'url n\'est pas valide';
        break;
}