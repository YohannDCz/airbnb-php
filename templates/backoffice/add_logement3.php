<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/add_logement3.css">
    <link rel="stylesheet" href="../css/add_logement.css">
    <script src="../script/add_logement.js" defer></script>
    <title>Document</title>
</head>
<body>
    <?php include "../components/header.php" ?>
    <div class="add_logement3">
        <h1> Tarification et Validation</h1>

        <form action="" method="POST">
            <div class="tarif">
                <label for="">Tarif par nuit</label>
                <input type="number" name="" id="" placeholder="100€">
           </div>

           <div class="tarif">
                <label for="">Description</label>
                <textarea name="" id="" cols="30" rows="10" placeholder="Description"></textarea>
           </div>
            <div class="btn">
                <button type="submit" id="btn_back2">Valider</button>
                <button >Continuer<img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-c-1024.png" alt="flèche"> </button>
            </div> 
        </form>
    </div>
    <?php include "../components/footer.php" ?>
</body>
</html>