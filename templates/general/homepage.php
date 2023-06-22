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
    <title>Document</title>
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
        src: url("../../assets/font/FuturaMediumBT.ttf");
    }
    @font-face {
        font-family: Didot;
        src: url("../../assets/fonts/Didot_Regular.ttf");
    }
    </style>
    <link rel="stylesheet" href="../styles/homepage/homepage.css">
    <link rel="stylesheet" href="../styles/homepage/carouselle.css">
    <link rel="stylesheet" href="../styles/homepage/collection.css">
    <link rel="stylesheet" href="../styles/homepage/argument.css">
    <link rel="stylesheet" href="../styles/homepage/review.css">
    <link rel="stylesheet" href="../styles/darkTheme.php">

</head>
<body>
    <?php include "../components/header.php" ?>
    <div id="carousel_area">
        <div class="carousel">
            <input type="radio" id="carousel-css-slide-1" name="carousel-css" value="slide-1" checked/>
            <input type="radio" id="carousel-css-slide-2" name="carousel-css" value="slide-2"/>
            <input type="radio" id="carousel-css-slide-3" name="carousel-css" value="slide-3"/>
            <!-- More Radio Buttons Here -->
            <div class="carousel-wrapper">
                <div class="carousel-slide" id="first_carousel">
                    <div>   
                    <h3>Vivez l’essence du luxe parisien dans nos logements d’exception</h3>
                    <p>Situé au coeur de la capitale, laissez vous choyer par nos logements de haut de gammes et nos services additionnel pour faire de votre voyage un voyage mémorable.</p>
                    </div>
                </div>
                <div class="carousel-slide" id="second_carousel">
                    <div>   
                    <h3>Vivez l’essence du luxe parisien dans nos logements d’exception</h3>
                    <p>Situé au coeur de la capitale, laissez vous choyer par nos logements de haut de gammes et nos services additionnel pour faire de votre voyage un voyage mémorable.</p>
                    </div>
                </div>
                <div class="carousel-slide" id="third_carousel">
                    <div>   
                    <h3>Vivez l’essence du luxe parisien dans nos logements d’exception</h3>
                    <p>Situé au coeur de la capitale, laissez vous choyer par nos logements de haut de gammes et nos services additionnel pour faire de votre voyage un voyage mémorable.</p>
                    </div>
                </div>
                <!-- More Slides Here -->
            </div>
        </div>
    </div>
    <div id="collection">
        <div id="collection_title">
            <span>
                Nos propositions
            </span>
        </div>
        <div id="top_collection">
            <div id="left_collection_btn" >
                <button>
                    <img src="../../assets/logo/arrow-black.png" alt="">
                </button>
            </div>
            <?php   echo '<div id="area_collection_grid">
                            <div id="collection_grid">';
                    $result = $location->getlocations();
                    foreach ($result as $r) {
                        echo '<div class="appart_parent" id="appart_1">
                            <img src="' . $r["pics"] . '" alt="facade villa">
                            <p class="title">' . $r["name"] . '</p>
                            <p class="description">' . $r["address"] . '</p>
                            <p class="description">' . $r["price"] . ' € / nuit</p>
                            <div class="reserve_button">
                                <button>Reserver</button>
                            </div>
                        </div>';
                    }
                    echo '</div>
                    </div>'; ?>
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
    <div class="arguement" id="argument_1">
        <img src="../../assets/img/argument_1.png" alt="">
        <div>
            <div class="title_arguement">
                <h2>Profitez d’un de nos 250 logements sur Paris</h2>
            </div>
            <div class="text_arguement">
                <p>Situé dans la capitale, nos logement donne une vue sur la Tour Eiffel, les Champs-Élysée ou sont encore situées directement sur l’île Saint-Louis. Réservés pour l’élite de la société</p>
            </div>
        </div>
    </div>
    <div class="arguement" id="argument_2">
        <img src="../../assets/img/argument_2.png" alt="">
        <div>
        <div class="title_arguement">
                <h2>Profitez d’un de nos 250 logements sur Paris</h2>
            </div>
            <div class="text_arguement">
                <p>Situé dans la capitale, nos logement donne une vue sur la Tour Eiffel, les Champs-Élysée ou sont encore situées directement sur l’île Saint-Louis. Réservés pour l’élite de la société</p>
            </div>
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
    <script src="../script/homepage.js"></script>
    <?php include "../components/footer.php" ?>
</body>
</html>