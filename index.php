<?php
session_start();
require 'database.php';
require 'api/ville.php';
require 'api/type.php';
require 'api/periode.php';
require 'api/mois.php';
require 'api/user.php';
require 'api/continent.php';

if (!isset($_REQUEST['uc']))
    $uc = 'home';
else
    $uc = $_REQUEST['uc'];

switch ($uc) {
    case 'home':
        {
            include("controleurs/home.php");
            break;
        }
    case 'majTemp':
        {
            include("controleurs/temperature.php");
            break;
        }
    case 'authentification':
        {
            include("controleurs/administrator.php");
            break;
        }
    default:
        echo 'l\'url n\'est pas valide';
        break;
}
?>