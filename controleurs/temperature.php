<?php
require 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('vues');
$twig = new \Twig\Environment($loader);
$ville = new ville();
$type = new type();
$periode = new periode();
$mois = new mois();

if (!isset($_REQUEST['action']))
    $action = 'maj';
else
    $action = $_REQUEST['action'];

$mois =  json_decode($mois->getMois());
$types = json_decode($type->getTypes());

switch ($action) {
    //formulaire des villes
    case 'maj':
        {
            //retourne résultats des villes
            $villes =  $ville->getAllVilles();
            $villes2 = json_decode($villes);
            foreach ($villes2 as $v){
                //recupère nom de la ville
                $nomVille = $v->villeNom;
                //recupère id de la ville
                $idVille = $v->villeId;

                $data = file_get_contents('http://api.previmeteo.com/33a3c400b08f1b2205c25b00aef0ca9c/ig/api?weather='.$v->villeNom.'&format=json');
                $city = json_decode($data);
                $temperatureValue = ($city->weather->current_conditions->temp_c->{'@attributes'}->data);
                //parcours périodes (mois)
                foreach ($mois as $m) {
                    $bool = $periode->isExistPeriode($m->id, $idVille);
                    if($bool){
                        $periode->updatePeriode($m->id, $idVille, $temperatureValue);
                    }else{
                        $periode->createPeriode($m->id, $idVille, $temperatureValue);
                    }
                   //tester si une période est déjà enregistrée pour cette ville et ce mois
                    //si oui modifier la valeur
                    //si non enregistrer une ligne dans période
               }
                //si existe modifier ligne sinon créer
                echo 'ok';
            }

            break;
        }
}
?>