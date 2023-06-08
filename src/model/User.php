<?php

//Inclusion du fichier pour la connexion a la BDD
require_once './Database.php';

//Ces lignes de code ont été recyclées avec le consentement des personnes l'ayant fait ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les prof
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
    function getUserRole($userId,$role_id) {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT role_id FROM role WHERE user_id = :userId or roleId = :roleId ;");
        $request->bindParam(":userId", $userId);
        $request->bindParam(":roleId", $roleId);

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function changeRole($user_id,$newrole) {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("UPDATE role_id SET role_id = :newrole WHERE user_id = :user_id ;");
        $request->bindParam(":user_id", $user_id);
        $request->bindParam(":newrole", $newrole);

        $request->execute();

        if ($query->execute()) {
            // Update réussie
            return true;
        }
        

    }
    function disablingProccess($email,$password) {
        //Connecter la BDD
        $db = new Database();

        //Ouverture de la connection
        $connection = $db->getConnection();

        //Requêtes SQL
            //Vérification de l'identifiant unique 
        $check = 'SELECT email, password from user WHERE email = :email ;';

        $query = $connection->prepare($check);
        $query->bindParam(":email", $email);

        //On voit si l'execute passe ou pas
        if (!$query->execute()){
            return false;
            }

        //On voit si les mots de passe sont les mêmes
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        if ($result && !password_verify($password, $result["password"])) {
            //Mauvais  Mot De Passe
            return False;
            }
        //Requêtes SQL
        $query = 'UPDATE user SET activated = FALSE WHERE email = :email ;';
        $query = $connection->prepare($query);
        $query->bindParam(":email", $email);
        if ($query->execute()) {
            // Update réussie
            return true;
        }
            
    }
    function enablingProccess($email,$password) {
        //Connecter la BDD
        $db = new Database();

        //Ouverture de la connection
        $connection = $db->getConnection();

        //Requêtes SQL
            //Vérification de l'identifiant unique 
        $check = 'SELECT email, password from user WHERE email = :email ;';

        $query = $connection->prepare($check);
        $query->bindParam(":email", $email);

        //On voit si l'execute passe ou pas
        if (!$query->execute()){
            return false;
            }

        //On voit si les mots de passe sont les mêmes
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        if ($result && !password_verify($password, $result["password"])) {
            //Mauvais  Mot De Passe
            return False;
            }
        //Requêtes SQL
        $query = 'UPDATE user SET activated = True WHERE email = :email ;';
        $query = $connection->prepare($query);
        $query->bindParam(":email", $email);
        if ($query->execute()) {
            // Update réussie
            return true;
        }
            
    }
    function deleteUser($password,$email) {

        //Connecter la BDD
        $db = new Database();
        //Ouverture de la connection
        $connection = $db->getConnection();
        //Requêtes SQL
            //Vérification de l'identifiant unique 
        $check = 'SELECT mail, password from user WHERE mail = :mail ;';
        $query = $connection->prepare($check);
        $query->bindParam(":mail", $mail);
        //On voit si l'execute passe ou pas
        if (!$query->execute()){
            return false;
            }
        //On voit si les mots de passe sont les mêmes
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if ($result && !password_verify($password, $result["password"])) {
            //Mauvais  Mot De Passe
            return False;
            }
        //Requêtes SQL
        $query = 'DELETE FROM user WHERE mail = :mail ;';
        $query = $connection->prepare($query);
        $query->bindParam(":mail", $mail);
        if ($query->execute()) {
            // Update réussie
            return true;
        }
        
        }
}