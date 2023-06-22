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

    
    function searchLocation($location,$maxPlaces,$dbParam,$orderByParam,$ascDesc) {
        //Connecter la BDD
        $db = new Database();
        $location = "%".$location."%";
        $where  = '';
        $orderBy= '';
        if ($maxPlaces !== '') {
            $where .= " WHERE max_places > :maxPlaces ";
        }
        if ($location !== '' && $maxPlaces !== '') {
            $where.= "and name LIKE :location or address LIKE :location";
        }
        else if ($location !== '' && $maxPlaces === '') {
            $where.= " WHERE name LIKE :location or address LIKE :location";
        }
        if ($orderByParam !== "") {
            $orderBy .= " ORDER BY ". $orderByParam. " " . $ascDesc;
        }
        $connection = $db->getConnection();
        echo "SELECT * FROM ". $dbParam . $where . $orderBy .";";
        $request = $connection->prepare("SELECT * FROM ". $dbParam . $where . $orderBy .";");
        
        $request->bindParam(":maxPlaces", $maxPlaces);
        $request->bindParam(":location", $location);
        
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
    function getNumberOfReviews() {
        
        //Connecter la BDD
        $db = new Database();

        // Ouverture de la connection
        $connection = $db->getConnection();

        //  Requêtes SQL
        $request = $connection->prepare("SELECT reviews.review, location.*, COUNT(*) FROM reviews INNER JOIN location ON location.id = reviews.location_id GROUP BY reviews.location_id order by COUNT(*); ");

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
    //fonction qui permet de rajouter des logements 
    function createLocation($address, $area, $name, $price, $pics,$max_places, $description, $currentlyFree) 
        {
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
