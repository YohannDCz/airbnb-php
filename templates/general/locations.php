<?php
require_once"../../src/model/Database.php";
require_once"../../src/model/Reservations.php";
$location = new Locations();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/locations.css">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <?php include "../components/header.php" ?>
    <nav>
        <div id="nav_bar">
            <input type="text" id="destination" placeholder="Destination">
            <input type="text" placeholder="Départ" onfocus="(this.type = 'date')">
            <input type="text" placeholder="Arrivée" onfocus="(this.type = 'date')">
            <input type="text" id="voyageurs" placeholder="Voyageurs">
            <div id="img">
                <div class="btn">
                    <button> <P>Rechercher</P> <img src="../../assets/logo/search.png" alt="flèche"> </button>
                </div>
            </div>
        </div>
    </nav>
    <div id="area_button_filtre">
        <button id="filtre">
            <p>Trier</p>
            <img src="../../assets/logo/filter.png" alt="">
        </button>
        <div id="panelfiltre" style="display: none">
            <p>Prix décroissants</p>
            <hr>
            <p>Prix croissants</p>
            <hr>
            <p>Pertinence</p>
            <hr>
            <p>Popularité</p>
        </div>
    </div>
    <?php echo '<div id="collection">
        <div id="collection_grid">';
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
        }
            ?>
        <div id="more">
            <button id="buttun_more">
                <p>Voir plus...</p>
            </button>
        </div>
    </div>
    <script src="../script/filtre.js"></script>
</body>
</html>