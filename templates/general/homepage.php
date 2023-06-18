<?php

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
        font-family: Didot;
        src: url("../../assets/fonts/Didot_Regular.ttf");
    }
    </style>
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
    <div id="carousel_area">
        <div class="carousel">
            <input type="radio" id="carousel-css-slide-1" name="carousel-css" value="slide-1" checked/>
            <input type="radio" id="carousel-css-slide-2" name="carousel-css" value="slide-2"/>
            <input type="radio" id="carousel-css-slide-3" name="carousel-css" value="slide-3"/>
            <!-- More Radio Buttons Here -->
            <div class="carousel-wrapper">
                <div class="carousel-slide">
                <img src="../../assets/img/immeuble.png" alt="">
                </div>
                <div class="carousel-slide">
                <img src="../../assets/img/appartement4.png" alt="">
                </div>
                <div class="carousel-slide">
                <img src="../../assets/img/appartement6.png" alt="">
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
            <div id="area_collection_grid">
            <div id="collection_grid">
                <div class="appart_parent" id="appart_1">
                    <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                    <p class="title">Villa Paris 12e</p>
                    <p class="description">22, rue des champs elysées </p>
                    <p class="description">600 € / nuit</p>
                    <div class="reserve_button">
                        <button>Reserver</button>
                    </div>
                </div>

                <div class="appart_parent">
                    <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                    <p class="title">Villa Paris 12e</p>
                    <p class="description">22, rue des champs elysées </p>
                    <p class="description">600 € / nuit</p>
                    <div class="reserve_button">
                        <button>Reserver</button>
                    </div>
                </div>

                <div class="appart_parent">
                    <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                    <p class="title">Villa Paris 12e</p>
                    <p class="description">22, rue des champs elysées </p>
                    <p class="description">600 € / nuit</p>
                    <div class="reserve_button">
                        <button>Reserver</button>
                    </div>
                </div>
                <div class="appart_parent">
                    <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                    <p class="title">Villa Paris 12e</p>
                    <p class="description">22, rue des champs elysées </p>
                    <p class="description">600 € / nuit</p>
                    <div class="reserve_button">
                        <button>Reserver</button>
                    </div>
                </div>
                <div class="appart_parent">
                    <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                    <p class="title">Villa Paris 12e</p>
                    <p class="description">22, rue des champs elysées </p>
                    <p class="description">600 € / nuit</p>
                    <div class="reserve_button">
                        <button>Reserver</button>
                    </div>
                </div>
                <div class="appart_parent">
                    <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                    <p class="title">Villa Paris 12e</p>
                    <p class="description">22, rue des champs elysées </p>
                    <p class="description">600 € / nuit</p>
                    <div class="reserve_button">
                        <button>Reserver</button>
                    </div>
                </div>
                <div class="appart_parent">
                    <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                    <p class="title">Villa Paris 12e</p>
                    <p class="description">22, rue des champs elysées </p>
                    <p class="description">600 € / nuit</p>
                    <div class="reserve_button">
                        <button>Reserver</button>
                    </div>
                </div>
                <div class="appart_parent">
                    <img src="../../assets/img/img_facade_villa.jpg" alt="facade villa">
                    <p class="title">Villa Paris 12e</p>
                    <p class="description">22, rue des champs elysées </p>
                    <p class="description">600 € / nuit</p>
                    <div class="reserve_button">
                        <button>Reserver</button>
                    </div>
                </div>
            </div>
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
    <div class="arguement">
        <img src="../../assets/img/argument_1.png" alt="">
        <div>
            <h3>Profitez d’un de nos 250 logements sur Paris</h3>
            <p>Situé dans la capitale, nos logement donne une vue sur la Tour Eiffel, les Champs-Élysée ou sont encore situées directement sur l’île Saint-Louis. Réservés pour l’élite de la société</p>
        </div>
    </div>
    <div class="arguement">
        <img src="../../assets/img/argument_2.png" alt="">
        <div>
            <h3>Que ce soit pour une occasion ou pour visiter la ville </h3>
            <p>Faites vous accompagner par un chauffeur dès votre venue et visitez la ville  avec un guide touristique rattaché à chacune de nos locations. Vous n’avez pas la tête à visiter ? Ce n’est pas grave, avec un service personnalisable selon vos besoins ce sont des petit plus qui font toute la différence d’un voyage réussit la différence </p>
        </div>
    </div>
    <div id="review">
        <div id="left_review_btn" >
            <button>
                <img src="../../assets/logo/arrow-black.png" alt="">
            </button>
        </div>
        <div id="area_review_slider">
            <div id="review_slider">
                
                
            </div>
        </div>
        <div id="right_review_btn">
            <button>
                <img src="../../assets/logo/arrow-black.png" alt="">
            </button>
        </div>
    </div>

<?php

?>
    <script src="./homepage.js"></script>
    <footer>
        
    </footer>
</body>
</html>