<?php

//Inclusion du fichier pour la connexion a la BDD
require_once 'Database.php';

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les prof
class Locations 
{
    //Fonction qui retourne les loyers sans les filtrer/organiser
    function getlocations()
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
    //Permet de rechercher un logement suivant le nom entré

    //WIP Ajouter un SELECT top(//) pour limiter le nombre de SELECT    
    function searchLocationByName($location)
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * From location WHERE name LIKE :location or address LIKE :location ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //Filtre les résultats par ordre croissant des prix
    function ascPriceOrder()
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM location ORDER BY price;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //Filtre les résultats par ordre décroissant des prix
    function descPriceOrder()
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM location ORDER BY price DESC;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //Filtre les résultats par ordre alphabétique des noms
    function aZOrder()
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM location ORDER BY name ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //Filtre les résultats par Ordre alphabétique inversé des noms
    function zAOrder()
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM location ORDER BY name DESC;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //Filtre les résultats par ordre croissant des places maximales possibles
    function ascMaxPlacesOrder()
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM location ORDER BY max_places ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //Filtre les résultats par ordre décroissant des places maximales possibles
    function descMaxPlacesOrder()
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM location ORDER BY max_places DESC ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //Filtre les résultats par disponibilité des logements
    function currentlyFree()
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM location WHERE currently_free = TRUE ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //Filtre les résultats suivant la superficie demandée et retourne les logements avec une superficie égale ou superieure
    function byArea($area)
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM location WHERE area >= :area ;");
        $request->bindParam(":area", $area);
        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //Filtre les résultats suivant l'adresse du logement par rapport à l'adresse demandée
    function byLocation($address)
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM location WHERE address like :address ;");
        $request->bindParam(":address", $address);
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
    //WIP
    function searchByDate() {
        pass;
    }
    //WIP
    function AddLocation() {
        pass;
    }
}