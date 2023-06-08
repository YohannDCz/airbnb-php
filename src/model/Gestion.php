<?php

//Inclusion du fichier pour la connexion a la BDD
require_once 'Database.php';

//Ces lignes de code ont été recyclées avec le consentement des personnes l'ayant fait ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les prof
class Locations 
{ 
    function searchLocation($location)
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
}