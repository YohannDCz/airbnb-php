<?php
class Database {
    //Code recyclé du projet précédent et aussi de https://www.w3schools.com/php/php_mysql_connect.asp 

    //Fonction qui permet de se connecter à la base de données
    function getConnection() {
        // Variables de connexion BDD (fallback local si env non définies)
        $servername = getenv('DB_HOST') ?: 'localhost';
        $database   = getenv('DB_NAME') ?: 'Project_Airbnb';
        $username   = getenv('DB_USER') ?: 'Yohann';
        $password   = getenv('DB_PASSWORD') ?: 'Yohann';

        try {
            $dsn = sprintf('mysql:host=%s;dbname=%s', $servername, $database);
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $exception) {
            echo 'ERROR: ' . $exception->getMessage();
            return null;
        }
    }
}
?>
