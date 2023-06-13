<?php

//Inclusion du fichier pour la connexion a la BDD
require_once 'Database.php';

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les prof
class Locations 
{ 
    function getlocationdetails()
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT location.*, reviews.Reviews, reviews.created_at, location_services.* FROM location INNER JOIN reviews ON location.id = reviews.location_id INNER JOIN location_services ON location.id = location_services.location_id ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function getLocationBySearch($search) {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT location.*, reviews.Reviews, reviews.created_at, location_services.* FROM location INNER JOIN reviews ON location.id = reviews.location_id INNER JOIN location_services ON location.id = location_services.location_id WHERE location.name LIKE :search ;");
        $request->bindParam(":search", $search);

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function deleteBookingByIds($locationId,$userId,$newStatus) {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("UPDATE booking SET booking_status = :newstatus WHERE location_id = :locationId and user_id = :userId");
        if ($request->execute()) {
            return False; }
        return True ;
    }
    function deleteReviewById($userId){
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("UPDATE reviews DROP id WHERE user_id = :userId ;");
        $request->bindParam(":userId", $userId);
        if ($request->execute()) {
            return False; }
        return True ;
    }
    function setLocationAvailability($newStatus) {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("UPDATE location UPDATE currently_free =:newstatus WHERE id = :id ;");
        $request->bindParam(":newstatus", $newstatus);
        if ($request->execute()) {
            return False; }
        return True ;
    }
}