<?php

//Inclusion du fichier pour la connexion a la BDD
require_once __DIR__ . '/Database.php';

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les profs
class Management 
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
        $search = '%' . $search . '%';
        $request->bindParam(":search", $search);

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function deleteBookingByIds($userId,$locationId,$newStatus) {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("UPDATE booking SET booking_status = :newstatus WHERE location_id = :locationId AND user_id = :userId");
        $request->bindParam(":newstatus", $newStatus, PDO::PARAM_INT);
        $request->bindParam(":locationId", $locationId, PDO::PARAM_INT);
        $request->bindParam(":userId", $userId, PDO::PARAM_INT);
        return $request->execute();
    }
    function deleteReviewById($userId){
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("DELETE FROM reviews WHERE user_id = :userId ;");
        $request->bindParam(":userId", $userId, PDO::PARAM_INT);
        return $request->execute();
    }
    function setLocationAvailability($locationId, $newStatus) {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("UPDATE location SET currently_free = :newstatus WHERE id = :id ;");
        $request->bindParam(":newstatus", $newStatus, PDO::PARAM_BOOL);
        $request->bindParam(":id", $locationId, PDO::PARAM_INT);
        return $request->execute();
    }
    function createLocation($name,$price,$address,$pics,$description,$maxPlaces,$currentlyFree,$area) {
            //Connecter la BDD
            $db = new Database();
            
            // Ouverture de la connection
            $connection = $db->getConnection();

            // Requêtes SQL
            $request = $connection->prepare("INSERT INTO location (name, price, address, pics, description, max_places, currently_free, area)
                                             VALUES (:name, :price, :address, :pics, :description, :maxPlaces, :currentlyFree, :area)");
            $request->bindParam(":name", $name);
            $request->bindParam(":price", $price);
            $request->bindParam(":address", $address);
            $request->bindParam(":pics", $pics);
            $request->bindParam(":description", $description);
            $request->bindParam(":maxPlaces", $maxPlaces, PDO::PARAM_INT);
            $request->bindParam(":currentlyFree", $currentlyFree, PDO::PARAM_BOOL);
            $request->bindParam(":area", $area);

            //Execution de la Query
            $request->execute();

            // Fermeture de la connection
            $connection = null;

            return $request;
    }
    function updateLocation($name,$price,$address,$pics,$description,$maxPlaces,$currentlyFree,$area,$locationId) {
        //Connecter la BDD
        $db = new Database();
        
        // Ouverture de la connection
        $connection = $db->getConnection();

        // Requêtes SQL
        $request = $connection->prepare("UPDATE location
                                         SET name = :name,
                                             price = :price,
                                             address = :address,
                                             pics = :pics,
                                             description = :description,
                                             max_places = :maxPlaces,
                                             currently_free = :currentlyFree,
                                             area = :area
                                         WHERE id = :locationId;");
        $request->bindParam(":name", $name);
        $request->bindParam(":price", $price);
        $request->bindParam(":address", $address);
        $request->bindParam(":pics", $pics);
        $request->bindParam(":description", $description);
        $request->bindParam(":maxPlaces", $maxPlaces, PDO::PARAM_INT);
        $request->bindParam(":currentlyFree", $currentlyFree, PDO::PARAM_BOOL);
        $request->bindParam(":area", $area);
        $request->bindParam(":locationId", $locationId, PDO::PARAM_INT);

        //Execution de la Query
        $request->execute();

        // Fermeture de la connection
        $connection = null;

        return $request;
    }
    function deleteLocation($locationId){
            //Connecter la BDD
            $db = new Database();
        
            // Ouverture de la connection
            $connection = $db->getConnection();
    
            // Requêtes SQL
            $request = $connection->prepare("DELETE FROM location WHERE id = :locationId;");
            $request->bindParam(":locationId", $locationId, PDO::PARAM_INT);

    //Execution de la Query
    $request->execute();

    // Fermeture de la connection
    $connection = null;

    return $request;
} }
