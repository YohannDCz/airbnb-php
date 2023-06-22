<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/header.css">
        <link
            href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="../../assets/fonts/Vogue.ttf">
        <title>Header</title>
    </head>
    <body>
        <header>
            <div class="headerleft">
                <div class="logo">
                    <img class="logo" src="../../assets/logo/logo.png" alt="#" />
                    <div class="nom">
                        <p> TAILLE D'OR </p>
                    </div>
                    <div class="taches">
                        <a href="../general/homepage.php">Accueil</a>
                        <a href="../general/locations.php">Locations</a>
                        <a href="../user/messages.php">Messagerie</a>
                    </div>
                </div>
            </div>
            <div class="icons">
                <div class="freur">
                    <p>FR</p>
                    <div class="separation"></div>
                    <p>&euro;</p>
                </div>
                <div class="round">
                    <a href="lien_image2.html"><img
                            src="../../assets/logo/search2.png" alt="LP"></a>
                </div>
                <div class="menu">
                    <div class="menu2">
                        <img class="menuicon" src="../../assets/logo/menu.png"
                            alt="L'icone du menu.">
                        <img class="profile" src="../../assets/logo/profile.png"
                            alt="L'icone de la honte.">
                    </div>
                </div>
            </div>
            
            <script src="../script/menu.js"></script>
            
        </header>
        <div class="panel" style="display: none">
            <img src="../../assets/logo/cross.png" alt class="close">
            <a href="#">
                <div class="account panel-item">
                    <img src="../../assets/logo/person.svg" alt
                        class="accounticon icon black">
                    <img class="white"
                        src="../../assets/logo/person-white.svg" alt>
                    <p>Compte</p>
                </div>
            </a>
            <hr>
            <a href="#">
                <div class="reservations panel-item">
                    <img src="../../assets/logo/reservations.svg"
                        alt class="reservationicon icon black">
                    <img class="white"
                        src="../../assets/logo/reservations-white.svg"
                        alt>
                    <p>Réservations</p>
                </div>
            </a>
            <hr>
            <a href>
                <div class="favori panel-item">
                    <img src="../../assets/logo/favorite.svg" alt
                        class="favorisicon icon black">
                    <img class="white"
                        src="../../assets/logo/favorite-white.svg"
                        alt>
                    <p>Favoris</p>
                </div>
            </a>
            <hr>
            <a>
                <div class="theme panel-item">
                    <img src="../../assets/logo/theme.svg" alt
                        class="themeicon black">
                    <img class="white"
                        src="../../assets/logo/theme-white.svg" alt>
                    <p>Thème</p>
                </div>
            </a>
            <hr>
            <a>
                <div class="logout panel-item">
                    <img src="../../assets/logo/logout.svg" alt
                        class="signouticon black">
                    <img class="white"
                        src="../../assets/logo/logout-white.svg" alt>
                    <p>Déconnexion</p>
                </div>
            </a>
        </div>
        <script src="../script/header.js"></script>
    </body>
</html>
