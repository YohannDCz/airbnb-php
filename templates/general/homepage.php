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
    l
    <style>
        <?php
        include("../css/homepage/homepage.css");
        include("../css/homepage/carouselle.css");
        include("../css/homepage/collection.css");
        include("../css/homepage/argument.css");
        include("../css/homepage/review.css")

        ?>
    </style>
</head>
<body>
    <header>

    </header>
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
                    echo '</div>'; ?>
            </div>
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
            <h2>Profitez d’un de nos 250 logements sur Paris</h3>
            <p>Situé dans la capitale, nos logement donne une vue sur la Tour Eiffel, les Champs-Élysée ou sont encore situées directement sur l’île Saint-Louis. Réservés pour l’élite de la société</p>
        </div>
    </div>
    <div class="arguement" id="argument_2">
        <img src="../../assets/img/argument_2.png" alt="">
        <div>
            <h2>Que ce soit pour une occasion ou pour visiter la ville </h3>
            <p>Faites vous accompagner par un chauffeur dès votre venue et visitez la ville  avec un guide touristique rattaché à chacune de nos locations. Vous n’avez pas la tête à visiter ? Ce n’est pas grave, avec un service personnalisable selon vos besoins ce sont des petit plus qui font toute la différence d’un voyage réussit la différence </p>
        </div>
    </div>
    <div id="review">
    <h3>Retour d'esperience</h3>
        <div id="area_review_slider">
            <div id="review_slider">
                <div class="review_element">
                    <h3>Sophie Dupont</h3>
                    <p>Superbe logement ! Propre, spacieux et décoré avec goût. Nous avons passé un séjour vraiment agréable.</p>
                </div>
                <div class="review_element">
                    <h3>Alexandre Martin</h3>
                    <p>L'emplacement de ce logement est idéal. Il est proche des attractions touristiques, des restaurants et des transports en commun. Parfait pour explorer la ville.</p>
                </div>
                <div class="review_element">
                    <h3>Emma Tremblay</h3>
                    <p>Les propriétaires sont très accueillants et attentifs à nos besoins. Ils nous ont fourni toutes les informations nécessaires pour profiter au maximum de notre séjour.</p>
                </div>
                <div class="review_element">
                    <h3>Gabriel Sanchez</h3>
                    <p>Les propriétaires sont très accueillants et attentifs à nos besoins. Ils nous ont fourni toutes les informations nécessaires pour profiter au maximum de notre séjour.</p>
                </div>
                <div class="review_element">
                    <h3>Olivia Thompson</h3>
                    <p>Les propriétaires sont très accueillants et attentifs à nos besoins. Ils nous ont fourni toutes les informations nécessaires pour profiter au maximum de notre séjour.</p>
                </div>
                <div class="review_element">
                    <h3>Liam Patel</h3>
                    <p>La résidence est très calme et sécurisée. Nous nous sommes sentis en toute tranquillité pendant notre séjour, ce qui a ajouté une dimension de relaxation supplémentaire.</p>
                </div>
                <div class="review_element">
                    <h3>Charlotte Dubois</h3>
                    <p>La résidence est très calme et sécurisée. Nous nous sommes sentis en toute tranquillité pendant notre séjour, ce qui a ajouté une dimension de relaxation supplémentaire.</p>
                </div>
                <div class="review_element">
                    <h3>Noah Kim</h3>
                    <p>La résidence est très calme et sécurisée. Nous nous sommes sentis en toute tranquillité pendant notre séjour, ce qui a ajouté une dimension de relaxation supplémentaire.</p>
                </div>
                <div class="review_element">
                    <h3>Mia Garcia</h3>
                    <p>Le lit était extrêmement confortable, ce qui nous a permis de bien nous reposer après des journées bien remplies de visites et d'activités.</p>
                </div>
                <div class="review_element">
                    <h3>Lucas Anderson</h3>
                    <p>Nous recommandons vivement ce logement à tous ceux qui souhaitent passer un séjour mémorable. Nous n'hésiterons pas à réserver à nouveau lors de notre prochaine visite.</p>
                </div>
            </div>
        </div>
    </div>

<?php

?>
    <script src="./homepage.js"></script>
    <footer>
        
    </footer>
</body>
</html>