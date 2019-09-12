<?php
require 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('vues');
$twig = new \Twig\Environment($loader);
$ville = new ville();
$type = new type();
$periode = new periode();
$continent = new continent();

if (!isset($_REQUEST['action']))
    $action = 'authentification';
else
    $action = $_REQUEST['action'];

$types = json_decode($type->getTypes());
$continents = json_decode($continent->getContinents());
switch ($action) {
    //formulaire des villes
    case 'authentification':
        {
            echo $twig->render('login.html.twig', [
            ]);
            break;
        }
    case 'tryLogin':
        {
            $login = ($_POST['login'] !== "") ? $_POST['login'] : null;
            $mdp = ($_POST['mdp'] !== "") ? $_POST['mdp'] : null;
            $bool = $periode->getConnexion($login, $mdp);
            if ($bool) {
                $villes = json_decode($ville->getAllVilles());
                echo $twig->render('administrator.html.twig', [
                    "villes" => $villes
                ]);
            } else {
                echo $twig->render('login.html.twig', [
                ]);

            }
            break;
        }
    case 'updateCity':
        {
            $numCity = $_GET["numCity"];
            $city = $ville->getVilleById($numCity);

            $voyages = json_decode($type->getVoyageForCity($numCity));
            echo $twig->render('update.html.twig', [
                'ville' => $city,
                'continents' => $continents,
                'voyages' => $voyages
            ]);
            break;
        }
    case 'deleteCity':
        {
            $numCity = ($_GET['numCity'] !== "") ? $_GET['numCity'] : null;
            //supprimer ligne table avoir
            $type->deleteCityLink($numCity);
            //suupprimer toutes les lignes tables periode
            $periode->deleteCityPeriodes($numCity);
            //supprimer ligne table ville
            $ville->deleteVille($numCity);
            $villes = json_decode($ville->getAllVilles());
            echo $twig->render('administrator.html.twig', [
                "villes" => $villes
            ]);
            break;
        }
    case 'createCity':
        {
            echo $twig->render('update.html.twig', [
                'continents' => $continents
            ]);
            break;
        }
    case 'submitCreateCity':
        {
            $nomVille = ($_POST['nomVille'] !== "") ? $_POST['nomVille'] : null;
            $imageVille = ($_POST['imageVille'] !== "") ? $_POST['imageVille'] : null;
            $continent = ($_POST['$continent'] !== "") ? $_POST['continent'] : null;
            $ville->createVille($nomVille, $imageVille, $continent);
            $villes = json_decode($ville->getAllVilles());
            echo $twig->render('administrator.html.twig', [
                "villes" => $villes
            ]);
            break;
        }
    case'submitUpdateCity':
        {
            $nomVille = ($_POST['nomVille'] !== "") ? $_POST['nomVille'] : null;
            $imageVille = ($_POST['imageVille'] !== "") ? $_POST['imageVille'] : null;
            $continent = ($_POST['continent'] !== "") ? $_POST['continent'] : null;
            $idVille = ($_GET['villeId'] !== "") ? $_GET['villeId'] : null;

            $ville->updateVille($nomVille, $imageVille, $continent, $idVille);
            $villes = json_decode($ville->getAllVilles());
            echo $twig->render('administrator.html.twig', [
                "villes" => $villes
            ]);
            break;

        }
    case 'updateVoyage':
        {
            $numCity = ($_GET['villeId'] !== "") ? $_GET['villeId'] : null;
            $numType = ($_GET['typeId'] !== "") ? $_GET['typeId'] : null;

            $voyage = $type->getVoyageById($numCity, $numType);
            var_dump($voyage);
            echo $twig->render('voyage_form.html.twig', [
                'types' => $types,
                'voyage' => $voyage
            ]);
            break;
        }
    case 'deleteVoyage':
        {
            $numCity = ($_GET['villeId'] !== "") ? $_GET['villeId'] : null;
            $numType = ($_GET['typeId'] !== "") ? $_GET['typeId'] : null;
            $city = $ville->getVilleById($numCity);

            //supprimer ligne table ville
            $type->deleteVoyage($numCity, $numType);
            $villes = json_decode($ville->getVilles());
            $voyages = json_decode($type->getVoyageForCity($numCity));
            echo $twig->render('update.html.twig', [
                'ville' => $city,
                'continents' => $continents,
                'voyages' => $voyages
            ]);
            break;

        }
    case 'createVoyageSinceCity':
        {
            $numCity = ($_GET['villeId'] !== "") ? $_GET['villeId'] : null;
            echo $twig->render('voyage_form.html.twig', [
                'types' => $types,
                'numCity' => $numCity
            ]);
            break;
        }
    case 'enregistrerVoyageSinceCity':
        {
            $numCity = ($_POST['numCity'] !== "") ? $_POST['numCity'] : null;
            $budget = ($_POST['budget'] !== "") ? $_POST['budget'] : null;
            $duree = ($_POST['duree'] !== "") ? $_POST['duree'] : null;
            $typeSelected = ($_POST['type'] !== "") ? $_POST['type'] : null;
            $type->createVoyage($numCity, $typeSelected, $budget, $duree);
            $city = $ville->getVilleById($numCity);

            $voyages = json_decode($type->getVoyageForCity($numCity));
            echo $twig->render('update.html.twig', [
                'ville' => $city,
                'continents' => $continents,
                'voyages' => $voyages
            ]);

            break;
        }
    case 'enregistrerVoyageUpdate':
        {
            $numCity = ($_POST['numCity'] !== "") ? $_POST['numCity'] : null;
            $numType = ($_POST['numType'] !== "") ? $_POST['numType'] : null;
            $budget = ($_POST['budget'] !== "") ? $_POST['budget'] : null;
            $duree = ($_POST['duree'] !== "") ? $_POST['duree'] : null;
            $type->updateVoyage($numCity, $numType, $budget, $duree);
            $city = $ville->getVilleById($numCity);

            $voyages = json_decode($type->getVoyageForCity($numCity));
            echo $twig->render('update.html.twig', [
                'ville' => $city,
                'continents' => $continents,
                'voyages' => $voyages
            ]);

            break;
        }

//finir modif ville
//enregistrer voyage
//modifier voyage


}
?>