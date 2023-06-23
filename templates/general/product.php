<?php
require_once"../../src/model/Database.php";
require_once"../../src/model/Reservations.php";
$location = new Locations();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @font-face {
        font-family: Futura_medium_italic;
        src: url("../../assets/fonts/Futura_Medium_Italic.ttf");
    }

    @font-face {
        font-family: Futura_Heavy;
        src: url("../../assets/fonts/Futura_Heavy_font.ttf");
    }

    @font-face {
        font-family: Futura_medium;
        src: url("../../assets/fonts/Futura_medium.ttf");
    }

    @font-face {
        font-family: Didot;
        src: url("../../assets/fonts/Didot_Regular.ttf");
    }
    </style>
    <style>
        <?php
        include("../styles/product/product.css");
        include("../styles/product/dispo.css");
        include("../styles/product/collection.css");
        include("../styles/product/review.css");
        include("../styles/product/productpage.css");
        ?>
    </style>
    <title>Document</title>
</head>
<body>
    <?php include "../components/header.php" ?>
    <link rel="stylesheet" href="../styles/darkTheme.php">
<div class="column">
    <div id="product">
        <div id="aera_product">
            <div id="left_aera_product">
                <div id="main_img">
                    <img src="../../assets/img/img_facade_villa.jpg" alt="" id="img0">
                </div>
                <div id="other_img">
                    <button>
                        <img src="../../assets/img/argument1.png" alt="" id="img1">
                    </button>
                    <button>
                        <img src="../../assets/img/argument2.png" alt="" id="img2">
                    </button>
                    <button>
                        <img src="../../assets/img/appartment2.png" alt="" id="img3">
                    </button>
                </div>
            </div>
            <div id="right_aera_product">
                <h1>Villa Paris 12e</h1>
                <div id="adresse">
                    <img src="../../assets/logo/map.svg" alt="">
                    <p>22, rue des champs elysées </p>
                </div>
                <div id="price">
                    <h3><span id="price_each">600</span>&nbsp€ /nuit</h3>
                </div>
                <div id="calender" >
                    <div id="calender_du">
                        <div>
                            <img src="../../assets/logo/calender.svg" alt="">
                            <p>Du</p>
                        </div>
                        <input type="date" id="date_debut">
                    </div>
                    <div id="calender_au">
                        <div>
                            <img src="../../assets/logo/calender.svg" alt="">
                            <p>Au</p>
                        </div>
                        <input type="date" id="date_fin">
                    </div>
                    <p>Séjour de&nbsp<span id="nb_jours"></span></p>
                </div>
                <div id="total">
                    <h2>TOTAL&nbsp&nbsp&nbsp</h2>
                    <h2 id="price_tag">0</h2>
                    <h2>&nbsp€</h2>
                </div>
                <div id="submit_div">
                    <button id="submit_button">
                        <p>Reserver</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="dispo">
    <h3>Les disponibilités</h3>
        <div id="area_dispo">
            <div id="left_dispo_btn" >
                <button>
                    <img src="../../assets/logo/arrow-black.png" alt="">
                </button>
            </div>
            <div id="area_dispo_slider">
                <div id="dispo_slider">
                    <div class="dispo_element">
                        <div class="date_dispo_element">
                            <p>20/06/2023</p>
                        </div>
                        <div class="statut_dispo_element">
                            <p>disponible</p>
                        </div>
                    </div>
                    <div class="dispo_element">
                        <div class="date_dispo_element">
                            <p>20/06/2023</p>
                        </div>
                        <div class="statut_dispo_element">
                            <p>disponible</p>
                        </div>
                    </div>
                    <div class="dispo_element">
                        <div class="date_dispo_element">
                            <p>20/06/2023</p>
                        </div>
                        <div class="statut_dispo_element">
                            <p>non disponible</p>
                        </div>
                    </div>
                    <div class="dispo_element">
                        <div class="date_dispo_element">
                            <p>20/06/2023</p>
                        </div>
                        <div class="statut_dispo_element">
                            <p>disponible</p>
                        </div>
                    </div>
                    <div class="dispo_element">
                        <div class="date_dispo_element">
                            <p>20/06/2023</p>
                        </div>
                        <div class="statut_dispo_element">
                            <p>non disponible</p>
                        </div>
                    </div>
                    <div class="dispo_element">
                        <div class="date_dispo_element">
                            <p>20/06/2023</p>
                        </div>
                        <div class="statut_dispo_element">
                            <p>disponible</p>
                        </div>
                    </div>
                    <div class="dispo_element">
                        <div class="date_dispo_element">
                            <p>20/06/2023</p>
                        </div>
                        <div class="statut_dispo_element">
                            <p>disponible</p>
                        </div>
                    </div>
                    <div class="dispo_element">
                        <div class="date_dispo_element">
                            <p>20/06/2023</p>
                        </div>
                        <div class="statut_dispo_element">
                            <p>disponible</p>
                        </div>
                    </div>
                    <div class="dispo_element">
                        <div class="date_dispo_element">
                            <p>20/06/2023</p>
                        </div>
                        <div class="statut_dispo_element">
                            <p>disponible</p>
                        </div>
                    </div>
                    <div class="dispo_element">
                        <div class="date_dispo_element">
                            <p>20/06/2023</p>
                        </div>
                        <div class="statut_dispo_element">
                            <p>disponible</p>
                        </div>
                    </div>
                    <div class="dispo_element">
                        <div class="date_dispo_element">
                            <p>20/06/2023</p>
                        </div>
                        <div class="statut_dispo_element">
                            <p>disponible</p>
                        </div>
                    </div>
                    <div class="dispo_element">
                        <div class="date_dispo_element">
                            <p>20/06/2023</p>
                        </div>
                        <div class="statut_dispo_element">
                            <p>disponible</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="right_dispo_btn">
                <button>
                    <img src="../../assets/logo/arrow-black.png" alt="">
                </button>
            </div>
        </div>
    </div>
    <div id="collection">
        <div id="collection_title">
            <h3>
                Nos propositions
            </h3>
        </div>
        <div id="top_collection">
            <div id="left_collection_btn" >
                <button>
                    <img src="../../assets/logo/arrow-black.png" alt="">
                </button>
            </div>
            <?php 
        echo '<div id="area_collection_grid">';
        echo '<div id="collection_grid">';

        if (!isset($result)) {
            $result = $location->getlocations();
        };
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
        <div id="more">
            <button id="buttun_more">
                <p>Voir plus...</p>
            </button>
        </div>
    </div>
    <div id="review">
    <h3>Retour d'esperience</h3>
        <div id="area_review">
            <div id="left_review_btn" >
                <button>
                    <img src="../../assets/logo/arrow-black.png" alt="">
                </button>
            </div>
            <div id="area_review_slider">
                <div id="review_slider">
                <?php 
                    $result = $location->getReviews();
                    foreach ($result as $r) {
                        echo '<div class="review_element">
                                    <h3>' . $r["first_name"] . " " . $r["last_name"] . "</h3> 
                                    <p>" . $r["Review"] . "<p> 
                            </div>"; 
                    };
                    
                    ?>
                </div>
            </div>
            <div id="right_review_btn">
                <button>
                    <img src="../../assets/logo/arrow-black.png" alt="">
                </button>
            </div>
        </div>
    </div>
</div>
    <?php include "../components/footer.php" ?>
    <script src="../script/product.js"></script>
</body>
</html>