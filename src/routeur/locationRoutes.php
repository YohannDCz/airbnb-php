<?php
require_once"../controller/locationController.php";
session_start();
$_SESSION['result'] = null;

//Easter Egg Rick Rolled !

//Active la fonction qui va aller chercher les logements
$result = showQueryResults();

//La session permetra de sauvegarder les résultats pour les afficher après coup
$_SESSION['result'] = $result;


//Redirection vers la page "location"
header("location: ../../templates/general/locations.php");

