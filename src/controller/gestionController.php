<?php 
require_once('./model/Database');
require_once('./model/Gestion.php');

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les profs

//Fonction qui permet de supprimer une réservation suivant l'Id de l'utilisateur 
function deleteBooking() {
    //Récupération des ids et du nouveau statut qui supprime la réservation
    $userId = $_POST["userId"];
    $locationId = $_POST["locationId"];
    $newstatus = $_POST["newstatus"];
    
    //Appel de la classe présente dans Gestion.php
    $management = new Management;

    //suppression de la réservation
    $management->deleteBookingByIds($userId,$locationId,$newstatus);
    return True ;
} 

//Fonction qui permet de modifier la disponibilité du logement choisi
function availability() {
    //Récupération du nouveau statut de disponibilité 
    $newStatus = $_POST["newstatus"];
    
    //Appel de la classe présente dans Gestion.php
    $management = new Management;

    //Changement du statut de disponibilité
    $management->setLocationAvailability($newStatus);
    return True ;
}

// Fonction qui permet d'ajouter un logement à la base de données
function AddLocation() {

    //Appel de la classe présente dans Gestion.php
    $location = new Management();

    //Ajout du logement à la base de donnée avec ,comme défaut, null si la valeur n'est pas présente    
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
//Fonction qui met à jour les différentes infos du logement  
function UpdateLocation() {
    //Récupération de l'Id
    $locationId = $_POST['locationId'];

    //Appel de la classe présente dans Gestion.php
    $location = new Management();

    //Modification du logement avec ,comme défaut, null si la valeur n'est pas présente  
    $locationName = $location->updateLocation(
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