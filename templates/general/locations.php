<?php
require_once"../../src/model/Database.php";
require_once"../../src/model/Reservations.php";
session_start();
if (isset($_SESSION['result'])) {
    $result = $_SESSION['result'];
}
$location = new Locations();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php include "../components/header.php" ?>
    <link rel="stylesheet" href="../styles/locations.css">
    <nav>
        <div id="nav_bar">
            <form action="../../src/routeur/locationRoutes.php" method="POST">
                    <input type="text" id="destination" name="location"    placeholder="Destination" >
                    <input type="text" id="Départ"      name="Departure"   placeholder="Départ" onfocus="(this.type = 'date')">
                    <input type="text" id="Arrivée"     name="Arrival"     placeholder="Arrivée"  onfocus="(this.type = 'date')">
                    <input type="text" id="voyageurs"   name="maxPlaces"   placeholder="Voyageurs">
                
                <div id="img">
                    <div class="btn">
                        <button>Rechercher <img src="../../assets/logo/search.png" alt="flèche"> </button>
                    </div>
                </div>
            </form>
        </div>
        <div id="area_button_filtre">
            <button id="filtre">
                Trier
                <img src="../../assets/logo/filter.png" alt="">
            </button>
            <div id="panelfiltre" style="display: none">
                <form action="../../src/routeur/locationRoutes.php" method="post">
                    <input type="submit" id="desc"        name="desc"        value="Prix Décroissant" >
                    <hr>
                    <input type="submit" id="asc"         name="asc"         value="Prix Décroissant" >
                    <hr>
                    <input type="submit" id="relevance"   name="relevance"   value="Pertinence"  >
                    <hr>
                    <input type="submit" id="pop"         name="pop"         value="Popularité">
                </form>
            </div>
            <script src="../script/filtre.js"></script>
        </div>
    </nav>
    <?php 
        echo '<div id="collection">';
        echo '<div id="collection_grid">';

        if (!isset($result)) {
            $result = $location->getlocations();
        }

        foreach ($result as $r) {
            echo '<div class="appart_parent" id="appart_1">';
            echo '<img src="'. $r["pics"] . '" alt="facade villa">';
            echo '<p class="title">' . $r["name"] . '</p>';
            echo '<p class="description">' . $r["address"] . '</p>';
            echo '<p class="description">' . $r["price"] . ' € / nuit</p>';
            echo '<div class="reserve_button">';
            echo '<button>Reserver</button>';
            echo '</div>';
            echo '</div>';
        }

        echo '</div>';
        echo '</div>';
    ?>
        <!-- <div id="more">
            <button id="buttun_more">
                <p>Voir plus...</p>
            </button>
        </div> -->
    <?php include "../components/footer.php" ?>
</body>
</html>