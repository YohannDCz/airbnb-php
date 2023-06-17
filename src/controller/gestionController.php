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
function AddLocation() {

    $location = new Management();
    $locationName = $location->createLocation(
        isset($_POST["name"]) ? $_POST["name"] : null,
        isset($_POST["price"]) ? $_POST["price"] : null,
        isset($_POST["address"]) ? $_POST["address"] : null,
        isset($_POST["pics"]) ? $_POST["pics"] : null,
        isset($_POST["description"]) ? $_POST["description"] : null,
        isset($_POST["max_places"]) ? $_POST["max_places"] : null,
        isset($_POST["currently_free"]) ? $_POST["currently_free"] : null,
        isset($_POST["area"]) ? $_POST["area"] : null
    );

    return $locationName;
} 
function UpdateLocation() {
    $locationId = $_POST['locationId'];
    $location = new Management();
    $locationName = $location->modifyLocation(
        isset($_POST["name"]) ? $_POST["name"] : null,
        isset($_POST["price"]) ? $_POST["price"] : null,
        isset($_POST["address"]) ? $_POST["address"] : null,
        isset($_POST["pics"]) ? $_POST["pics"] : null,
        isset($_POST["description"]) ? $_POST["description"] : null,
        isset($_POST["max_places"]) ? $_POST["max_places"] : null,
        isset($_POST["currently_free"]) ? $_POST["currently_free"] : null,
        isset($_POST["area"]) ? $_POST["area"] : null,
        $locationId
    );

    return $locationName;
}