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
        include("../css/homepage/carouselle.css")
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
                Slide 1
                </div>
                <div class="carousel-slide">
                Slide 2
                </div>
                <div class="carousel-slide">
                Slide 3
                </div>
                <!-- More Slides Here -->
            </div>
        </div>
    </div>
    <div id="collection">
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
        <div id="more">
            <button id="buttun_more">
                <p>Voir plus...</p>
            </button>
        </div>
    </div>
<?php

?>
    <script src="./filtre.js"></script>
    <footer>
        
    </footer>
</body>
</html>