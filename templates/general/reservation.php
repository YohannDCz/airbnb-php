<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        src: url("../../assets/fonts/Futura_Medium.ttf");
    }
    @font-face {
        font-family: Didot;
        src: url("../../assets/fonts/Didot_Regular.ttf");
    }
    </style>
    <style>
        <?php
        include("../styles/reservation/reservation.css");
        include("../styles/reservation/main.css");
        ?>
    </style>
</head>
<body>
    <header>

    </header>
    <div id="main">
        <div id="left">
            <h2>
                Recapitulatif de la réservation
            </h2>
            <div id="text_left">
                <p>Nombre de nuit : 5 nuits</p>
                <p>prix par nuit &nbsp&nbsp&nbsp: 600 €</p>
            </div>
            <h2>TOTAL &nbsp&nbsp<span>3000</span>&nbsp€</h2>
            <button id="submit">
                <p>Confirmer la reservation</p>
                <img src="../../assets/logo/arrow-black.png" alt="">
            </button>
        </div>
        <div id="right_aera_product">
            <div id="right_aera_img">
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
            <h1>Villa Paris 12e</h1>
            <div id="adresse">
                <img src="../../assets/logo/map.svg" alt="">
                <p>22, rue des champs elysées </p>
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
            </div> 
        </div>
    </div>
    <footer>

    </footer>
    <script src="../script/confirmation_reservation.js"></script>
</body>
</html>