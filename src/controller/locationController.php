<?php 
require_once('../../src/model/Database.php');
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
function showPastBooking() {
    session_start();
    
    $userId = $_SESSION["userId"];

    $location = new Locations;

    $pastBooking = $location->getLocationOnStatus($userId);

    return $pastBooking;
}



function showQueryResults() {
    session_start();
    $ascDesc = '';
    $orderBy = '';
    if(!isset($_SESSION["searchedLocation"]) && isset($_POST["location"]) || isset($_POST["maxPlaces"])){
        $_SESSION["searchedLocation"] = $_POST["location"];
        $_SESSION["maxPlaces"] = $_POST["maxPlaces"];
    }
    if (isset($_POST["location"])) {
        if ($_POST["location"] === "Rick And Roll" || $_POST["location"] === "Rick Roll" ) {
            header("location: https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj95_my8NP_AhUhUqQEHckhC_QQ3yx6BAglEAI&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DdQw4w9WgXcQ&usg=AOvVaw0aHtehaphMhOCAkCydRLZU&opi=89978449");
            return;
        };
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
            pass;
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


