<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/add_logement.css">
        <title>Page 1</title>
    </head>
    <body>
        <?php include "../components/header.php" ?>
        <div class="body">
            <div class="add_logement">
                <h1> Ajouter un logement </h1>
                <div class="box_logement">
                    <form action method="POST">
                        <div class="Form_group">
                            <label for="choix_appartement">Type de logement</label>
                            <select name="choix_appartement" id="choix_appartement">
                                <option value="Appartement1">Appartement</option>
                                <option value="Appartement2">Maison</option>
                                <option value="Appartement3">Studio</option>
                            </select>
                        </div>

                        <div class="Form_group">
                            <label for="nom">Nom du logement</label>
                            <input type="text" name="nom" id="nom"
                                placeholder="Nom du logement">
                        </div>

                        <div class="Form_group">
                            <label for="arrondissement">Arrondissement</label>
                            <select name="arrondissement" id="arrondissement">
                                <option value="Arrondissement1"> 1er Arrondissement</option>
                                <option value="Arrondissement2"> 2ème Arrondissement</option>
                                <option value="Arrondissement3"> 3ème Arrondissement</option>
                                <option value="Arrondissement4"> 4ème Arrondissement</option>
                                <option value="Arrondissement5"> 5ème Arrondissement</option>
                                <option value="Arrondissement6"> 6ème Arrondissement</option>
                                <option value="Arrondissement7"> 7ème Arrondissement</option>
                                <option value="Arrondissement8"> 8ème Arrondissement</option>
                                <option value="Arrondissement9"> 9ème Arrondissement</option>
                                <option value="Arrondissement10"> 10ème
                                    Arrondissement</option>
                                <option value="Arrondissement11"> 12ème
                                    Arrondissement</option>
                                <option value="Arrondissement12"> 13ème
                                    Arrondissement</option>
                                <option value="Arrondissement13"> 14ème
                                    Arrondissement</option>
                                <option value="Arrondissement14"> 15ème
                                    Arrondissement</option>
                                <option value="Arrondissement15"> 16ème
                                    Arrondissement</option>
                                <option value="Arrondissement17"> 17ème
                                    Arrondissement</option>
                                <option value="Arrondissement18"> 18ème
                                    Arrondissement</option>
                                <option value="Arrondissement19"> 19ème
                                    Arrondissement</option>
                                <option value="Arrondissement20"> 20ème
                                    Arrondissement</option>
                            </select>
                        </div>

                        <div class="Form_group">
                            <label for="adresse">Adresse du logement</label>
                            <input type="text" name="adresse" id="adresse"
                                placeholder="19 rue henri Dunant">
                        </div>
                        <div class="Form_group">
                            <label for="superficie">Superficie en m2</label>
                            <input type="number" name="superficie" id="superficie"
                                placeholder="100 m&sup2;">
                        </div>
                        <div class="btn">
                            <button type="submit">Valider</button>
                            <button id="first_btn">Continuer<img
                                    src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-c-1024.png"
                                    alt="flèche">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="../script/add_logement.js"></script>
        <?php include "../components/footer.php" ?>
    </body>
</html>