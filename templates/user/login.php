<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/login.css">
    </head>
    <body>
        <?php include "../components/header-mini.php" ?>
        <div class="login">
            <h1>Connexion</h1>
            <form action>
                <div class="form">
                <div class="box_login">
                    <input type="email" name id placeholder="Adresse mail @">
                    <input type="password" name id="mot_de_passe"
                        placeholder="Mot de passe">
                </div>
                <div class="link_password">
                    <a href="#" id="left">Mot de passe oublié ?</a> 
                    <a href="#" id="right">S'inscrire</a>
                </div>
                <div class="btn">
                    <button> Continuer <img
                    src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-c-1024.png"
                    alt="flèche"> </button>
                </div>
                </div>
            </form>
        </div>
        <?php include "../components/footer.php" ?>
    </body>
</html>