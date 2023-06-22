<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/account.css">
        <script src="../script/header.js" defer></script>
        <title>Document</title>
    </head>
    <body>
        <?php include "../components/header.php" ?>
        <div class="profil-container no-scroll">
            <div class="profil-page">
                <div class="profil-frame1">
                    <div class="profil-form">
                        <div class="icon-container">
                            <p>A propos de moi</p>
                            <img src="../../assets\img\Rectangle 319.svg" alt
                                class="icon-img">
                        </div>
                        <div class="profil-formulaire">
                            <div class="profil-input">
                                <div class="profil-info">
                                    <div class="info">
                                        <h3 class="title-info">Nom</h3>
                                        <p class="text-info" id="name"></p>

                                    </div>
                                    <a href="/" class="edit">Editer</a>
                                </div>
                                <div class="profil-info">
                                    <div class="info">
                                        <h3 class="title-info">Adresse email</h3>
                                        <p class="text-info" id="email"></p>

                                    </div>
                                    <a href="/" class="edit">Editer</a>
                                </div>
                                <div class="profil-info">
                                    <div class="info">
                                        <h3 class="title-info">Numéro de tel.</h3>
                                        <p class="text-info" id="tel"></p>

                                    </div>
                                    <a href="/" class="edit">Editer</a>
                                </div>
                                <div class="profil-info">
                                    <div class="info">
                                        <h3 class="title-info">Date de
                                            naissance</h3>
                                        <p class="text-info" id="birthdate"></p>
                                    </div>
                                    <a href="/" class="edit">Editer</a>
                                </div>
                                <div class="profil-info">
                                    <div class="info">
                                        <h3 class="title-info">Nationalité</h3>
                                        <p class="text-info"id=nationalité></p>
                                    </div>
                                    <a href="/" class="edit">Editer</a>
                                </div>
                                <div class="profil-info">
                                    <div class="info">
                                        <h3 class="title-info">Sex</h3>
                                        <p class="text-info" id=sex></p>
                                    </div>
                                    <a href="/" class="edit">Editer</a>
                                </div>
                                <div class="profil-info">
                                    <div class="info">
                                        <h3 class="title-info">Adresse</h3>
                                        <p class="text-info" id= adress> <br></p>
                                    </div>
                                    <a href="/" class="edit">Editer</a>
                                </div>
                            </div>
                        </div>
                        <div class="btn">
                            <button type="submit">Valider</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../components/footer.php" ?>
        <script>
            
            const userId = 1;

            fetchJson()

            function fetchJson() {
                fetch('profile.php', {
                    method: 'POST',
                    headers: { 'Content-type': 'application/json' },
                    body: JSON.stringify({ id: userId }),
                })
                .then((r) => r.json())
                    .then((json) => {
                        console.dir(json);
                        document.getElementById('name').innerText = `${json.first_name} ${json.last_name}`;
                        document.getElementById('email').innerText = json.email;
                        document.getElementById('tel').innerText = json.phone;
                        document.getElementById('birthdate').innerText = json.birthdate;
                        document.getElementById('sex').innerText = json.Sex;
                        document.getElementById('nationalité').innerText = json.Nationality;
                        document.getElementById('adress').innerText = json.adress;
                    });
            }
        </script>
    </body>
</html>