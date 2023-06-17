<?php 
require_once('./model/Database');
require_once('./model/Reservations.php');

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les prof

//Fonction qui recupère tout les logements 

function ShowLocation() {
    $search = $_POST["search"];

    $location = new Locations;

    $result = $location->GetLocationByName($search);

    return $result;
}
function deleteBooking() {
    $userId = $_POST["userId"];
    $locationId = $_POST["locationId"];
    $newstatus = $_POST["newstatus"];
    
    $location = new locations;
    $location->deleteBookingByIds($userId,$locationId,$newstatus);
    return True ;
} 


