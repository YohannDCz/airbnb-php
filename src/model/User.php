<?php

//Inclusion du fichier pour la connexion a la BDD
require_once 'Database.php';

//Ces lignes de code ont été recyclées ( parce que on est écolo, bien sûr ) du projet précédent . Si un équivalant sur le web existe, je n'en avais aucune idée // Commentaire pour le prof
class user 
{
    function getUser() {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM user ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function getUserFirstNameAsc() {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM user ORDER BY first_name ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function getUserFirstNameDesc() {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM user ORDER BY first_name DESC ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function getUserLastNameAsc() {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM user ORDER BY last_name ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function getUserLastNameDesc() {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM user ORDER BY last_name DESC ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function getUserAgeAsc() {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM user ORDER BY birthdate ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function getUserAgeDesc() {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM user ORDER BY birthdate DESC  ;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function getUserRole($userId) {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT role_id FROM role WHERE user_id = :userId  ;");
        $request->bindParam(":userId", $userId);

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}