<?php
require_once"../controller\locationController.php";

if ($_POST["location"] || $_POST["maxPlaces"]) {

    $result = showQueryResults();
    session_start();
    $_SESSION['result'] = $result;
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