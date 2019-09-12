<?php
session_start();
require 'database.php';
require 'api/ville.php';
require 'api/type.php';
require 'api/periode.php';
require 'api/mois.php';

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
    default:
        echo 'l\'url n\'est pas valide';
        break;
}
?>