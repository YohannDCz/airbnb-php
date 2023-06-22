<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../templates/styles/add_logement.css">
    
    <script src="../../templates/script/add_logement.js" defer></script>
    <script src="../../templates/script/add_logement2.js" defer></script>
    
    <title>Document</title>
</head>
<body>
    <?php include "../components/header.php" ?>
    <div class="add_logement">
        <form action="" method="POST">
            <h1>Photo du logement</h1>
            <input type="file" name="image" id="inputImage" value="Ajouter une image" id="" accept="image/*">
            <img id="previewImage" src="../../assets/img/placeholder-image.png" alt="Aperçu de l'image">
        <div class="btn">
            <button id="btn_back2">Valider</button>
            <button id="second_btn">Continuer<img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-c-1024.png" alt="flèche"> </button>
        </div>
        </form>
    </div> 
    <?php include "../components/footer.php" ?>
</body>
</html>