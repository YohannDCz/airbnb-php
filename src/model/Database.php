<?php
class Database {
    // Fonction qui permet de se connecter à la base de données
    function getConnection() {
        // Variables de connexion BDD (fallback local si env non définies)
        // Pour le docker-compose fourni: host 127.0.0.1, BDD project_airbnb, user root, mdp root
        $servername = getenv('DB_HOST') ?: '127.0.0.1';
        $database   = getenv('DB_NAME') ?: 'project_airbnb';
        $username   = getenv('DB_USER') ?: 'root';
        $password   = getenv('DB_PASSWORD') ?: 'root';
        $port       = getenv('DB_PORT') ?: '3306';

        try {
            $dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4', $servername, $port, $database);
            $conn = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
            return $conn;
        } catch (PDOException $exception) {
            echo 'ERROR: ' . $exception->getMessage();
            return null;
        }
    }
}
?>
