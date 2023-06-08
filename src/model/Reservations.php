<?php

//Inclusion du fichier pour la connexion a la BDD
require_once 'Database.php';

//Ces lignes de code ont été recyclées ( parce que on est écolo, bien sûr ) du projet précédent . Si un équivalant sur le web existe, je n'en avais aucune idée // Commentaire pour le prof
class Locations 
{
    //Fonction qui retourne les loyers en ordre croissant
    function ascOrder()
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
    function descOrder()
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
    function ByArea($area)
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM location WHERE area > :area ;");
        $request->bindParam(":area", $area);
        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}