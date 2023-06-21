<?php
require_once"../controller\locationController.php";

if ($_POST["location"] || $_POST["maxPlaces"]) {

    //Easter Egg Rick Rolled !
    if ($_POST["location"] === "Rick And Roll" || $_POST["location"] === "Rick Roll" ) {
        header("location: https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj95_my8NP_AhUhUqQEHckhC_QQ3yx6BAglEAI&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DdQw4w9WgXcQ&usg=AOvVaw0aHtehaphMhOCAkCydRLZU&opi=89978449");
        return;
    }
    //Active la fonction qui va aller chercher les logements
    $result = showQueryResults();

    //La session permetra de sauvegarder les résultats pour les afficher après coup
    session_start();
    $_SESSION['result'] = $result;

    //Redirection vers la page "location"
    header("location: ../../templates\general\locations.php");
}


// require_once 'src/controller/locationController.php';

// // déclaration variable globale
// global $split_url;
// global $host;

// //cleaning de l'url en cas de méthode GET
// $url_cleaner = explode('?', $split_url[2]);
// $clean_url = $url_cleaner[0];

// // router dans la catégorie user
// switch ($clean_url) {
//     case 'listReservation':
//         //require la page page_list
//         require_once 'template/page/reservation_list.php';
//         break;
//     case 'createReservation':
//         //  require la page de création de page
//         require_once 'template/page/reservation_create.php';
//         break;
//     case 'pageReservation':
//         //require l'affichage page
//         require_once 'template/page/reservation_page.php';
//         break;
//     case 'locations':
//         // require l'affichage du catalogue
//         require_once 'template/page/locations.php';
//         break;
//     default :
//         //  require la page d'erreur
//         require_once 'template/404.php';
//         break;
// }