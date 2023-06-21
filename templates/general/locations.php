<?php
require_once"../../src/model/Database.php";
require_once"../../src/model/Reservations.php";
session_start();
if (isset($_SESSION['result'])) {

    $result = $_SESSION['result'];}
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
    <link rel="stylesheet" href="../css/locations.css">
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
    </nav>
    <div id="area_button_filtre">
        <button id="filtre">
            Trier
            <img src="../../assets/logo/filter.png" alt="">
        </button>
        <div id="panelfiltre" style="display: none">
            <form action="employee.action" method="post">
            <p>Prix décroissants</p>
            <hr>
            <p>Prix croissants</p>
            <hr>
            <p>Pertinence</p>
            <hr>
            <p>Popularité</p>
            </form>
        </div>
        <script src="../script/filtre.js"></script>
    </div>
    <?php 
    echo '<div id="collection">
        <div id="collection_grid">';
        if (!isset($result)) {
            $result = $location->getlocations();
            foreach ($result as $r) {
                echo '<div class="appart_parent" id="appart_1">
                    <img src="'. $r["pics"] . '" alt="facade villa">
                    <p class="title">' . $r["name"] . '</p>
                    <p class="description">' . $r["address"] . '</p>
                    <p class="description">' . $r["price"] . ' € / nuit</p>
                    <div class="reserve_button">
                        <button>Reserver</button>
                    </div>';
                echo"</div>";
            }}
        else {
            foreach ($result as $r) {
                echo '<div class="appart_parent" id="appart_1">
                    <img src="'. $r["pics"] . '" alt="facade villa">
                    <p class="title">' . $r["name"] . '</p>
                    <p class="description">' . $r["address"] . '</p>
                    <p class="description">' . $r["price"] . ' € / nuit</p>
                    <div class="reserve_button">
                        <button>Reserver</button>
                    </div>';
                echo"</div>";}}
        
            ?>
            ;
        <div id="more">
            <button id="buttun_more">
                <p>Voir plus...</p>
            </button>
        </div> -->
    </div>
    <?php include "../components/footer.php" ?>
</body>
</html>