<?php

//Inclusion du fichier pour la connexion a la BDD
require_once 'Database.php';

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les prof
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
    function createLocation($name,$price,$address,$pics,$description,$maxPlaces,$currentlyFree,$area) {
            //Connecter la BDD
            $db = new Database();
            
            // Ouverture de la connection
            $connection = $db->getConnection();

            // Requêtes SQL
            $request = $connection->prepare("INSERT INTO location (name, price, address, pics,description,max_places,currently_free,area) VALUES (:name, :price, :address, :pics, :description,:maxPlaces, :currentlyfree, :area)");
            $request->bindParam(":name", $name);
            $request->bindParam(":price", $profile_icon);
            $request->bindParam(":address", $pics);
            $request->bindParam(":pics", $pics);
            $request->bindParam(":description", $description);
            $request->bindParam(":max_places", $max_places);
            $request->bindParam(":currently_free", $currently_free);
            $request->bindParam(":area", $area);

            //Execution de la Query
            $request->execute();

            // Fermeture de la connection
            $connection = null;

            return $page_name;
    }
    function updateLocation($name,$price,$address,$pics,$description,$maxPlaces,$currentlyFree,$area,$locationId) {
        //Connecter la BDD
        $db = new Database();
        
        // Ouverture de la connection
        $connection = $db->getConnection();

        // Requêtes SQL
        $request = $connection->prepare("UPDATE location SET name = :name, price = :price address = :address, pics = :pics, description = :description, max_places = :maxPlaces, currently_free = :currentlyfree, area = :area WHERE location_id = locationId ;)");
        $request->bindParam(":name", $name);
        $request->bindParam(":price", $profile_icon);
        $request->bindParam(":address", $pics);
        $request->bindParam(":pics", $pics);
        $request->bindParam(":description", $description);
        $request->bindParam(":max_places", $max_places);
        $request->bindParam(":currently_free", $currently_free);
        $request->bindParam(":area", $area);
        
        $request->bindParam(":locationId", $locationId);

        //Execution de la Query
        $request->execute();

        // Fermeture de la connection
        $connection = null;

        return $page_name;
}
}