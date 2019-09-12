<?php
require 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('vues');
$twig = new \Twig\Environment($loader);
$ville = new ville();
$type = new type();
$periode = new periode();
$mois = new mois();

if (!isset($_REQUEST['action']))
    $action = 'form';
else
    $action = $_REQUEST['action'];

$mois =  json_decode($mois->getMois());
$types = json_decode($type->getTypes());

switch ($action) {
    //formulaire des villes
    case 'form':
        {

            echo $twig->render('form.html.twig', [
                'mois' => $mois,
                'types' => $types
            ]);
            break;
        }
        //voir villes
    case 'showCities' :
        {
            $temperatureMin =  ($_POST['temperatureMin']!== "") ? $_POST['temperatureMin'] : null;
            $temperatureMax = ($_POST['temperatureMax']!== "") ? $_POST['temperatureMax'] : null;
            $dureeMin = ($_POST['dureeMin']!== "") ? $_POST['dureeMin'] : null;
            $dureeMax = ($_POST['dureeMax']!== "") ? $_POST['dureeMax'] : null;
            $budgetMin = ($_POST['budgetMin']!== "") ? $_POST['budgetMin'] : null;
            $budgetMax = ($_POST['budgetMax']!== "") ? $_POST['budgetMax'] : null;
            $moisChoisi = ($_POST['mois']!== "") ? $_POST['mois'] : null;
            $type = ($_POST['type']!== "") ? $_POST['type'] : null;
            $villes = json_decode($ville->getVillesByOptions($dureeMin, $dureeMax, $temperatureMin,
                $temperatureMax, $budgetMin, $budgetMax, $type, $moisChoisi));
            echo $twig->render('form.html.twig', [
                'villes' => $villes,
                'mois' => $mois,
                'types' => $types
            ]);
            break;
        }
//affiche le détail d'une ville quand on clique dessus
    case 'showCityWithDetails' :
        {
            $numCity =  ($_GET['numCity']!== "") ? $_GET['numCity'] : null;
           $city =  ($ville->getVilleById($numCity));
         $periodes = json_decode($periode->getPeriodes($numCity));
            echo $twig->render('show_city.html.twig', [
                'ville' => $city,
                'periodes' => $periodes
            ]);
            break;
        }

}
?>