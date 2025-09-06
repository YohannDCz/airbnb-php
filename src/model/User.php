<?php

require_once __DIR__ . '/Database.php';

class Users {

function addUser($adress, $password, $first_name, $last_name,$birthdate, $phone, $email){
        //  Connecter la BDD
        $db = new Database();
        // Ouverture de la connection
        $connection = $db->getConnection();
        // Requêtes SQL

        // Schéma BDD.sql: users(id,last_name,first_name,birthdate,email,phone,password,Activated)
        // L'adresse n'existe pas dans ce dump, on l'ignore côté stockage
        $sql = 'INSERT INTO users (first_name, last_name, email, phone, password, birthdate, Activated)
        VALUES(:first_name, :last_name, :email, :phone, :password, :birthdate, :activated)';

        $query = $connection->prepare($sql);
    
        $adress=htmlspecialchars(strip_tags($adress));
        $first_name=htmlspecialchars(strip_tags($first_name));
        $last_name=htmlspecialchars(strip_tags($last_name));
        $phone=htmlspecialchars(strip_tags($phone));
        $email=htmlspecialchars(strip_tags($email));


        $query->bindParam(":first_name", $first_name);
        $query->bindParam(":last_name", $last_name);
        $query->bindParam(":email", $email);
        $query->bindParam(":phone", $phone);
        $query->bindParam(":password", $password);
        $query->bindParam(":birthdate", $birthdate);
        $activated = 1;
        $query->bindParam(":activated", $activated, PDO::PARAM_INT);


        if ($query->execute()){
            $connection = null;
            return true;
        }
        $connection = null;
        return false;
    }

    function checkUser($credentials){
 
        // Connecter la BDD
        $db = new Database();
        // Ouverture de la connection
        $connection = $db->getConnection();
        
        // Préparation/execution de la requête
        $sql = 'SELECT * FROM users WHERE email = :credentials';
        $query = $connection->prepare($sql);
        $query->execute([
            ":credentials" => $credentials,
        ]);
    
        // var_dump($stmt);
        
        // Fetch le résultat de la requête
        $results = $query->fetch(PDO::FETCH_ASSOC);
    
        // Fermeture de la connection
        $connection = null;
    
        return $results;
    }


    function login($credentials) {
        //Connecter la BDD
        $db = new Database();
       // Ouverture de la connection
        $connection = $db->getConnection();

        $sql = 'SELECT * FROM users WHERE email = :credentials';
        $query = $connection->prepare($sql);
        $query->execute([
            ":credentials" => $credentials,
        ]);

        return $query;
    }

}
?>
