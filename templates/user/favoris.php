<?php 

require_once"../../src/model/Database.php";
require_once"../../src/controller/locationController.php";
$location = new Locations();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/profile/styles_favoris.css">
    <script src="../javascript/header.js" defer ></script>
    <title>Document</title>
</head>
<body>
    <?php include "../components/header.php" ?>
    <link rel="stylesheet" href="../styles/dark_theme.php">
    <div id="collection">
            <h2>Favoris</h2>
        <div id="top_collection">
            <div id="left_collection_btn" >
                <button>
                    <img src="../../assets/logo/arrow-black.png" alt="">
                </button>
            </div>
            <?php 
        echo '<div id="area_collection_grid">';
        echo '<div id="collection_grid">';

        $result = showBooking("4");
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
            <div id="right_collection_btn">
                <button>
                    <img src="../../assets/logo/arrow-black.png" alt="">
                </button>
            </div>
        </div>
    </div>
    <footer>
        <div class = "container">
            <p>© 2023 Taillé d’or, Inc. </p>
            <a href="" class="footer-a">Infos sur l'entreprise</a>
            <a href="" class="footer-a">Fonctionnement du site</a>
            <a href="" class="footer-a">Conditions générales</a>
            <a href="" class="footer-a">Plan du site</a>
            <a href="" class="footer-a">Confidentialité</a>
        </div>
        <div class="container-img">
            <figure>
                <img src="../../assets/img/Facebook.svg" alt="">
            </figure>
            <figure>
                <img src="../../assets/img/instagram.svg" alt="">
            </figure>
            <figure>
                <img src="../../assets/img/Twitter.svg" alt="">
            </figure>
            <figure>
                <img src="../../assets/img/Youtube.svg" alt="">
            </figure>
        </div>
        </class>
    </footer>
    
    <?php include "../components/footer.php" ?>
    <script src="../../src/javascript/favoris.js"></script>

</body>
</html>