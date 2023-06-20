<?php 
require_once('../model/Database.php');
require_once('../../src/model/Reservations.php');

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les profs

//Fonction qui récupère tous les logements 
function ShowLocation() {
    $location = $_POST["location"];

    $location = new Locations;

    $result = $location->GetLocationByName($location);

    return $result;
}
function showQueryResults() {
    $searchedLocation = $_POST["location"];
    $maxPlaces = $_POST["maxPlaces"];

    $location = new Locations;
    if (isset($searchedLocation) || isset($maxPlaces)) {
    $result = $location->searchLocationByInput($searchedLocation,$maxPlaces);
    }

    else {
        $result = ShowLocation();
        
    }

    return $result;
}



