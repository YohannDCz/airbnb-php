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
    $location ='';
    $maxPlaces='';
    if (isset($_POST["location"]) || isset($_POST["maxPlaces"])) {
        if ($_POST["location"] === "Rick And Roll" || $_POST["location"] === "Rick Roll" ) {
            header("location: https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj95_my8NP_AhUhUqQEHckhC_QQ3yx6BAglEAI&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DdQw4w9WgXcQ&usg=AOvVaw0aHtehaphMhOCAkCydRLZU&opi=89978449");
            return;
        };
        $searchedLocation = $_POST["location"];
        $maxPlaces = $_POST["maxPlaces"];
    }

    switch($_POST) {
        case in_array('desc', $_POST):
            $ascDesc = "DESC";
        case in_array('asc', $_POST):
            $ascDesc = "ASC";
        case in_array('relevance', $_POST):
            pass;
        case in_array('pop', $_POST):
            pass;
    }
    $location = new Locations;
    $result = $location->searchLocation($location,$maxPlaces,"location","name",$ascDesc);

    return $result;
}



