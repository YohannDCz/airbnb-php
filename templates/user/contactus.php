<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../styles/contactus.css">
    </head>
    <body>
        <?php include "../components/header.php" ?>
        <div class="contact_us">
            <h1>Nous Contacter</h1>
            <form action="POST">
                <div class="box_1">
                    <input type="text" name="name" id placeholder="Prénom">
                    <input type="text" name="surname" id placeholder="Nom">
                    <input type="mail" name="mail" id placeholder="Adresse mail">
                    <input type="tel" name="tel" id="tel"
                        placeholder="Téléphone portable">
                </div>
                <div class="box_2">
                    <input type="text" name id placeholder="Objet">
                    <textarea name id="message"
                        placeholder="Message" style="outline: none;"></textarea>
                </div>

                <div class="btn">
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </div>
        <?php include "../components/footer.php" ?>
    </body>
</html>