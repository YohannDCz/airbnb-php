<?php

//Inclusion du fichier pour la connexion a la BDD
require_once 'Database.php';

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les profs
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
        $request = $connection->prepare('SELECT * FROM location');

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //Permet de rechercher un logement suivant le nom entré

    
    function searchLocationByInput($location,$maxPlaces)
    {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        if (isset($location) && isset($maxPlaces)) {
            $request = $connection->prepare("SELECT * From location WHERE max_places > :maxPlaces && name LIKE :location or address LIKE :location ;");
        }
        else if (!isset($location) && isset($maxPlaces)) {
            $request = $connection->prepare("SELECT * From location WHERE max_places > :maxPlaces;");
        }
        else if (isset($location) && !isset($maxPlaces)) {
            $request = $connection->prepare("SELECT * From location WHERE name LIKE :location or address LIKE :location ;");
        } 
        
        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //fonction générale pour trier efficacement suivant les paramètres données 
    function ascPriceOrder($dbParam,$param,$orderByParam,$ascDesc)
    {   
        $where = '';
        $orderBy = '';
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();
        if (isset($dbParam) && isset($param)) {
        $where = "WHERE " . $dbParam . " Like :" . $param ;
        }  
        if (isset($orderByParam)) {
            $orderBy = "ORDER BY " . $orderByParam ;
        }
        //  Requêtes SQL
        $request = $connection->prepare("SELECT * FROM location" . $where . $orderBy . $ascDesc . ";");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    // //Filtre les résultats par ordre décroissant des prix
    // function descPriceOrder()
    // {
    //     //Connecter la BDD
    //     $db = new Database();

    //     // Ouverture de la connection
    //     $connection = $db->getConnection();

    //     //  Requêtes SQL
    //     $request = $connection->prepare("SELECT * FROM location ORDER BY price DESC;");

    //     $request->execute();

    //     $result = $request->fetchAll(PDO::FETCH_ASSOC);

    //     return $result;
    // }
    // //Filtre les résultats par ordre alphabétique des noms
    // function aZOrder()
    // {
    //     //Connecter la BDD
    //     $db = new Database();

    //     // Ouverture de la connection
    //     $connection = $db->getConnection();

    //     //  Requêtes SQL
    //     $request = $connection->prepare("SELECT * FROM location ORDER BY name ;");

    //     $request->execute();

    //     $result = $request->fetchAll(PDO::FETCH_ASSOC);

    //     return $result;
    // }
    // //Filtre les résultats par Ordre alphabétique inversé des noms
    // function zAOrder()
    // {
    //     //Connecter la BDD
    //     $db = new Database();

    //     // Ouverture de la connection
    //     $connection = $db->getConnection();

    //     //  Requêtes SQL
    //     $request = $connection->prepare("SELECT * FROM location ORDER BY name DESC;");

    //     $request->execute();

    //     $result = $request->fetchAll(PDO::FETCH_ASSOC);

    //     return $result;
    // }
    // //Filtre les résultats par ordre croissant des places maximales possibles
    // function ascMaxPlacesOrder()
    // {
    //     //Connecter la BDD
    //     $db = new Database();

    //     // Ouverture de la connection
    //     $connection = $db->getConnection();

    //     //  Requêtes SQL
    //     $request = $connection->prepare("SELECT * FROM location ORDER BY max_places ;");

    //     $request->execute();

    //     $result = $request->fetchAll(PDO::FETCH_ASSOC);

    //     return $result;
    // }
    // //Filtre les résultats par ordre décroissant des places maximales possibles
    // function descMaxPlacesOrder()
    // {
    //     //Connecter la BDD
    //     $db = new Database();

    //     // Ouverture de la connection
    //     $connection = $db->getConnection();

    //     //  Requêtes SQL
    //     $request = $connection->prepare("SELECT * FROM location ORDER BY max_places DESC ;");

    //     $request->execute();

    //     $result = $request->fetchAll(PDO::FETCH_ASSOC);

    //     return $result;
    // }
    // //Filtre les résultats par disponibilité des logements
    // function currentlyFree()
    // {
    //     //Connecter la BDD
    //     $db = new Database();

    //     // Ouverture de la connection
    //     $connection = $db->getConnection();

    //     //  Requêtes SQL
    //     $request = $connection->prepare("SELECT * FROM location WHERE currently_free = TRUE ;");

    //     $request->execute();

    //     $result = $request->fetchAll(PDO::FETCH_ASSOC);

    //     return $result;
    // }
    // //Filtre les résultats suivant la superficie demandée et retourne les logements avec une superficie égale ou superieure
    // function byArea($area)
    // {
    //     //Connecter la BDD
    //     $db = new Database();

    //     // Ouverture de la connection
    //     $connection = $db->getConnection();

    //     //  Requêtes SQL
    //     $request = $connection->prepare("SELECT * FROM location WHERE area >= :area ;");
    //     $request->bindParam(":area", $area);
    //     $request->execute();

    //     $result = $request->fetchAll(PDO::FETCH_ASSOC);

    //     return $result;
    // }
    // //Filtre les résultats suivant l'adresse du logement par rapport à l'adresse demandée
    // function byLocation($address)
    // {
    //     //Connecter la BDD
    //     $db = new Database();

    //     // Ouverture de la connection
    //     $connection = $db->getConnection();

    //     //  Requêtes SQL
    //     $request = $connection->prepare("SELECT * FROM location WHERE address like :address ;");
    //     $request->bindParam(":address", $address);
    //     $request->execute();

    //     $result = $request->fetchAll(PDO::FETCH_ASSOC);

    //     return $result;
    // }
    
    
    //WIP
    function searchByDate() {
        pass;
    }
    //WIP
    function createLocation() {
        function addUser($address, $password, $name, $price, $pics,$max_places, $description, $currentlyFree){
            //  Connecter la BDD
            $db = new Database();
            // Ouverture de la connection
            $connection = $db->getConnection();
            // Requêtes SQL
    
            $sql = 'INSERT INTO "location" (name, price, address, pics, description, currently_free, max_places,area)
            VALUES(:name, :price, :address, :pics, :description, :currentlyFree, :maxPlaces :area)';
    
            $query = $connection->prepare($sql);
        
            $address=htmlspecialchars(strip_tags($address));
            $name=htmlspecialchars(strip_tags($name));
            $price=htmlspecialchars(strip_tags($price));
            $description=htmlspecialchars(strip_tags($description));
            $pics=htmlspecialchars(strip_tags($pics));
    
    
            $query->bindParam(":name", $name);
            $query->bindParam(":price", $price);
            $query->bindParam(":address", $address);
            $query->bindParam(":pics", $pics);
            $query->bindParam(":description", $description);
            $query->bindParam(":password", $password);
            $query->bindParam(":maxPlaces", $maxPlaces);
    
    
            if ($query->execute()){
                $connection = null;
                return true;
            }
            $connection = null;
            return false;
        }
    
    }
}