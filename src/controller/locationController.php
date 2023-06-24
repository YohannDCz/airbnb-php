<?php 
session_start();
require_once('../../src/model/Database.php');
require_once('../../src/model/Reservations.php');

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les profs

//fonction permettant d'afficher les réservations passées de chaque utilisateur suivant son id de session, la variable $status permettant de savoir si la réservation est 1-passée 2-en cours 3-future 4-mise en dans les favoris
function showBooking($status) {
    
    $userId = $_SESSION["userId"] ;

    $location = new Locations;

    $pastBooking = $location->getLocationOnStatus($userId,$status);

    return $pastBooking;
}


//fonction qui permet de montrer les résultats de la recherche 
function showQueryResults() {
    session_start();
    $ascDesc = '';
    $orderBy = '';
    if(!isset($_SESSION["searchedLocation"]) && isset($_POST["location"]) || isset($_POST["maxPlaces"])){
        $_SESSION["searchedLocation"] = $_POST["location"];
        $_SESSION["maxPlaces"] = $_POST["maxPlaces"];
    }
    
    
    switch($_POST) {
        case in_array('Prix Décroissant', $_POST):
            $ascDesc = "DESC";
            $orderBy = 'price';
            break;
        case in_array('Prix croissant', $_POST):
            $ascDesc = "ASC";
            $orderBy = 'price';
            break;
        case in_array('relevance', $_POST):
            break;
        case in_array('Popularité', $_POST):
            $location = new Locations;
            $result = $location->getNumberOfReviews();
            return $result;
    }
    $location = new Locations;
    if (isset($_SESSION["searchedLocation"])) {
        
        $searchedLocation = $_SESSION["searchedLocation"];
        $maxPlaces        = $_SESSION["maxPlaces"];
    $result = $location->searchLocation($searchedLocation,$maxPlaces,"location",$orderBy,$ascDesc);
    return $result;
    }
    $searchedLocation ='';
    $maxPlaces = '';
    $result = $location->searchLocation($searchedLocation,$maxPlaces,"location",$orderBy,$ascDesc);
    return $result;
}


