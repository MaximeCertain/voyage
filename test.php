<?php
require 'database.php';
require 'api/ville.php';
require 'api/type.php';

$ville = new ville();
$type = new type();

//retourne résultats des villes
$villes =  $ville->getVilles();
$villes2 = json_decode($villes);

//exemple de parcours des villes et d'explotiation du json
foreach ($villes2 as $ville){
    echo $ville->villeNom;
    echo $ville->budgetVoyage;
}

echo $type->getTypes();

//retourne résultats des villes selon critères, mettre variables à la place des données
//echo $ville->getVillesByOptions(1, 10, 5,40,400,850,1,1)
?>