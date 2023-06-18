<?php 
require_once('./model/Database');
require_once('./model/Reservations.php');

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les profs

//Fonction qui récupère tous les logements 
function ShowLocation() {
    $search = $_POST["search"];

    $location = new Locations;

    $result = $location->GetLocationByName($search);

    return $result;
}



