<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../styles/login.css">
        <link rel="stylesheet" href="../styles/darkTheme.php">
    </head>
    <body>
        <?php include "../components/header-mini.php" ?>
        <div class="login">
            <h1>Connexion</h1>
            <form method="POST" action="/MiniAirbnb/src/routeur/userRoutes.php">
                <div class="form">
                <div class="box_login">
                    <input type="email" name='email' id placeholder="Adresse mail @">
                    <input type="password" name='password' id="mot_de_passe"
                        placeholder="Mot de passe">
                </div>
                <div class="link_password">
                    <a href="resetPassword.php" id="left">Mot de passe oublié ?</a> 
                    <a href="signup.php" id="right">S'inscrire</a>
                </div>
                <div class="btn">
                    <button type="submit"> Continuer <img
                    src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-c-1024.png"
                    alt="flèche"> </button>
                </div>
                </div>
            </form>
        </div>
        <?php include "../components/footer.php" ?>
    </body>
</html>