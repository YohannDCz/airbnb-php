 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/signup.css">
        <link rel="stylesheet" href="../css/login.css">
        <script src="../script/signup.js"></script>

        <title>Document</title>
    </head>
    <body>

        <div class="signup" id="page2" style="display: none;">
            <h2>Informations Personnelles</h2>
            <form action="" method="post" id="page2-form">
                <div class="signup_box_second signup_box">
                    <input class="prenom_input" type="text" name="first_name"
                        id="first_name" placeholder="Prénom" required>
                    <input type="text" name="last_name" id="last_name"
                        placeholder="Nom" required>
                    <input type="date" name="birthday" id="birthday"
                        placeholder="Date d'anniversaire" required>
                    <input class="tel_input" type="tel" id="phone" name="phone"
                        placeholder="Telephone portable" required>
                </div>
                <div class="btn" id="page2-btn">
                    <button type="submit"> <span>Valider</span> <img
                            src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-c-1024.png"
                            alt="flèche"> </button>
                    <button type="button" id="back-btn"><img
                            src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-c-1024.png"
                            alt="flèche"> <span>Retour</span> </button>
                </div>
            </form>
        </div>
        <?php include "../components/footer.php" ?>

    </body>
</html>