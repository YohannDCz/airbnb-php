<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styles_signup.css">
   <script src="../javascript/signup.js"></script>

    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="../../assets/img/logo.png" alt="">
            <h1>TAILLE D'OR</h1>
        </div>
    </header>
    <div class="signup" id="page1">

        <h2>Inscription</h2>
        <form action="#" method="post" id="page1-form">
            <div class="signup_box"> 
                <input class="mail_input" type="email" name="email" id="email" placeholder="Adresse mail @" required>
                <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                <input class="confirm_password" type="password" id="confirm_password" name="confirm_password" placeholder="Confirmer le mot de passe" required>
            </div>
            <div class="acount_exist">
                <a href="#" id="left">Vous êtes déjà client ?</a> 
            </div>
            <div class="btn">
                <button type="submit"> <span>Continuer</span>  <img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-c-1024.png" alt="flèche"> </button>
            </div>

        </form>
    </div>


    <div class="signup" id="page2" style="display: none;">

        <h2>Informations Personnelles</h2>
        <form action="/" method="post"  id="page2-form">
            <div class="signup_box_second signup_box"> 
                <input class="prenom_input" type="text" name="first_name" id="first_name" placeholder="Prénom" required>
                <input type="text" name="last_name" id="last_name" placeholder="Nom" required>
                <input type="date" name="birthday" id="birthday" placeholder="Date d'anniversaire" required>
                <input class="tel_input" type="tel" id="phone" name="phone" placeholder="Telephone portable" required>
            </div>
            <div class="btn" id="page2-btn">
                <button type="submit"> <span>Valider</span>  <img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-c-1024.png" alt="flèche"> </button>
                <button type="button" id="back-btn"><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-c-1024.png" alt="flèche"> <span>Retour</span>   </button>
            </div>

        </form>
    </div>


</body>
</html>