<?php 
require_once('./model/Database');
require_once('./model/Gestion.php');

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les prof

function deleteBooking() {
    $userId = $_POST["userId"];
    $locationId = $_POST["locationId"];
    $newstatus = $_POST["newstatus"];
    
    $management = new Management;
    $management->deleteBookingByIds($userId,$locationId,$newstatus);
    return True ;
} 
function availability() {
    $newStatus = $_POST["newstatus"];
    
    $management = new Management;
    $management->setLocationAvailability($newStatus);
    return True ;
}