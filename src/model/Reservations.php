<?php

//Inclusion du fichier pour la connexion a la BDD
require_once __DIR__ . '/Database.php';

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

    
    function searchLocation($location,$maxPlaces,$dbParam,$orderByParam,$ascDesc) {
        //Connecter la BDD
        $db = new Database();
        $connection = $db->getConnection();

        $locationLike = $location !== '' ? "%" . $location . "%" : '';
        $where  = [];
        $params = [];

        if ($maxPlaces !== '' && $maxPlaces !== null) {
            $where[] = "max_places >= :maxPlaces";
            $params[':maxPlaces'] = (int)$maxPlaces;
        }
        if ($location !== '') {
            $where[] = "(name LIKE :location OR address LIKE :location)";
            $params[':location'] = $locationLike;
        }

        $sql = "SELECT * FROM location";
        if (!empty($where)) {
            $sql .= " WHERE " . implode(' AND ', $where);
        }
        if ($orderByParam !== "") {
            $allowedOrder = ['price', 'name', 'max_places'];
            if (in_array($orderByParam, $allowedOrder, true)) {
                $dir = strtoupper($ascDesc) === 'DESC' ? 'DESC' : 'ASC';
                $sql .= " ORDER BY $orderByParam $dir";
            }
        }
        $sql .= ";";

        $request = $connection->prepare($sql);
        foreach ($params as $k => $v) {
            $request->bindValue($k, $v);
        }
        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    //fonction qui permet d'avoir des commentaires 
    function getReviews() {
        
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT reviews.*, users.* FROM reviews INNER JOIN users ON users.id = reviews.user_id;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function getLocationReviews() {
        
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT reviews.*, users.* FROM reviews INNER JOIN users ON users.id = reviews.user_id;");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function getNumberOfReviews() {
        
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT reviews.review, location.*, COUNT(*) FROM reviews INNER JOIN location ON location.id = reviews.location_id GROUP BY reviews.location_id order by COUNT(*) DESC; ");

        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    function getLocationOnStatus($userId,$status) {
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT location.*
                                         FROM location
                                         INNER JOIN booking ON location.id = booking.location_id
                                         WHERE booking.booking_status = :status AND booking.user_id = :userId;");

        $request->bindParam(":userId", $userId);
        $request->bindParam(":status", $status);

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
    // function searchByDate() { /* TODO */ }
    //fonction qui permet de rajouter des logements 
    function createLocation($address, $area, $name, $price, $pics,$max_places, $description, $currentlyFree) 
        {
            //  Connecter la BDD
            $db = new Database();
            // Ouverture de la connection
            $connection = $db->getConnection();
            // Requêtes SQL
    
            $sql = 'INSERT INTO location (name, price, address, pics, description, currently_free, max_places, area)
            VALUES(:name, :price, :address, :pics, :description, :currentlyFree, :maxPlaces, :area)';
    
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
            $query->bindParam(":currentlyFree", $currentlyFree, PDO::PARAM_BOOL);
            $query->bindParam(":maxPlaces", $max_places, PDO::PARAM_INT);
            $query->bindParam(":area", $area);
    
    
            if ($query->execute()){
                $connection = null;
                return true;
            }
            $connection = null;
            return false;
        }
    
    }
