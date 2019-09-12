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

//retourne résultats des villes
$villes =  $ville->getVilles();
//echo $villes;
//exemple de parcours des villes et d'explotiation du json
/*$villes2 = json_decode($villes);
foreach ($villes2 as $v){
    echo $v->villeNom;
    echo $v->budgetVoyage;
}*/

    $data = file_get_contents('http://api.previmeteo.com/33a3c400b08f1b2205c25b00aef0ca9c/ig/api?weather=paris&format=json');
    $city = json_decode($data);
    //var_dump($city->weather->forecast_information->city->{'@attributes'}->data);
    var_dump($city->weather->current_conditions->temp_c->{'@attributes'}->data);
//echo $type->getTypes();
//retourne résultats des villes selon critères, mettre variables à la place des données
//echo $ville->getVillesByOptions(2, 5, null,5,300,null,1,1);
/*echo $ville->getVilleById(1);
echo $periode->getPeriodes(1);
$mois2 = json_decode($mois->getMois());
foreach ($mois2 as $m){
    echo $m;
}*/
//moove fichier vers var/www/html
?>