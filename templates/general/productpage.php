<?php
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
        include("../styles/productpage/product.css");
        include("../styles/productpage/dispo.css");
        include("../styles/productpage/collection.css");
        include("../styles/productpage/review.css");
        include("../styles/productpage/productpage.css");
        ?>
    </style>
    <title>Document</title>
</head>
<body>
    <header>


    </header>
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
                <h1>VIlla Paris 12e</h1>
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
                <div id="garanties">

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
    <h3>Les disponibilité</h3>
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
            <div id="area_collection_grid">
                <div id="collection_grid">
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
            <div id="right_review_btn">
                <button>
                    <img src="../../assets/logo/arrow-black.png" alt="">
                </button>
            </div>
        </div>
    </div>
    <footer>

    </footer>
    <script src="../script/productpage.js"></script>
</body>
</html>