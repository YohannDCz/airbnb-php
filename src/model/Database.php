<?php
class Database {
    // Fonction qui permet de se connecter à la base de données
    function getConnection() {
        // Variables de connexion BDD
        // - En local: des valeurs par défaut sont utilisées
        // - En serverless (Vercel): on exige des variables d'env explicites pour éviter 127.0.0.1
        $envHost = getenv('DB_HOST');
        $envName = getenv('DB_NAME');
        $envUser = getenv('DB_USER');
        $envPass = getenv('DB_PASSWORD');
        $envPort = getenv('DB_PORT');

        $isServerless = (getenv('VERCEL') !== false) || (getenv('AWS_LAMBDA_FUNCTION_NAME') !== false) || (getenv('LAMBDA_TASK_ROOT') !== false);

        // En serverless, si des variables critiques manquent, on échoue immédiatement avec un message clair
        if ($isServerless && ($envHost === false || $envName === false || $envUser === false || $envPass === false)) {
            $missing = [];
            if ($envHost === false) { $missing[] = 'DB_HOST'; }
            if ($envName === false) { $missing[] = 'DB_NAME'; }
            if ($envUser === false) { $missing[] = 'DB_USER'; }
            if ($envPass === false) { $missing[] = 'DB_PASSWORD'; }
            throw new RuntimeException('Database configuration missing: ' . implode(', ', $missing) . '. Configure these environment variables (e.g., on Vercel Project Settings).');
        }

        // Fallbacks (uniquement pour dev local)
        $servername = $envHost !== false ? $envHost : '127.0.0.1';
        $database   = $envName !== false ? $envName : 'project_airbnb';
        $username   = $envUser !== false ? $envUser : 'root';
        $password   = $envPass !== false ? $envPass : 'root';
        $port       = $envPort !== false ? $envPort : '3306';

        try {
            $dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4', $servername, $port, $database);
            $conn = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
            return $conn;
        } catch (PDOException $exception) {
            throw new RuntimeException('Database connection failed: ' . $exception->getMessage());
        }
    }
}
?>
