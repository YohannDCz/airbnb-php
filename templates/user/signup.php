<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../styles/signup.css" />
        <link rel="stylesheet" href="../styles/login.css" />
        

        <title>Document</title>
    </head>
    <body>
        <?php include "../components/header-mini.php" ?>
        <div class="signup" id="page1">
            <h2>Inscription</h2>
            <form action="/MiniAirbnb/src/routeur/signupRoute.php" method="POST" id="page1-form">
                <div class="signup_box">
                    <input
                        class="mail_input"
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Adresse mail @"
                        required
                    />
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Mot de passe"
                        required
                    />
                    <input
                        class="confirm_password"
                        type="password"
                        id="confirm_password"
                        name="confirm_password"
                        placeholder="Confirmer le mot de passe"
                        required
                    />
                    <input
                        class="prenom_input"
                        type="text"
                        name="first_name"
                        id="first_name"
                        placeholder="Prénom"
                        required
                    />
                    <input
                        type="text"
                        name="last_name"
                        id="last_name"
                        placeholder="Nom"
                        required
                    />
                    <input
                        type="date"
                        name="birthdate"
                        id="birthday"
                        placeholder="Date d'anniversaire"
                        required
                    />
                    <input
                        class="tel_input"
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="Telephone portable"
                        required
                    />
                    <input
                        type="text"
                        name="adress"
                        id="adress"
                        placeholder="Adresse"
                        required
                    />
                </div>
                <div class="acount_exist">
                    <a href="#" id="left">Vous êtes déjà client ?</a>
                </div>
                <div class="btn">
                    <button type="submit">
                        <span>Continuer</span>
                        <img
                            src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-c-1024.png"
                            alt="flèche"
                        />
                    </button>
                </div>
            </form>
        </div>
        <?php include "../components/footer.php" ?>
    </body>
</html>
