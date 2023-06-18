<?php

// // require de tous les controllers
// require_once 'src/controller/userController.php';
// require_once 'src/controller/locationController.php';
// require_once 'src/controller/funcController.php';
// require_once 'src/controller/gestionController.php';

// //  déclaration variable globale
// global $split_url;
// global $host;

// //cleaning de l'url en cas de méthode GET
// $url_cleaner = explode('?', $split_url[2]);
// $clean_url = $url_cleaner[0];

// // routage 
// switch ($clean_url) {

//     case 'signup':
//         //  fonction d'inscription
//         if(signup()) {
//             header('Location:' . 'http://' . $host . '/home');
//         } else {
//             header('Location:' . 'http://' . $host . '/user/signup');
//         }
//         break;
//     case 'login':
//         //fonction de login
//         if(login()) {
//             header('Location:' . 'http://' . $host . '/home');
//         }   else {
//             header('Location:' . 'http://' . $host . '/user/login');
//         }
//         break;
//     case 'logout':
//         //  fonction de logout
//         if (logout()) {
//             header('Location:' . 'http://' . $host . '/user/login');
//         }
//         break;

//     case 'bookReservation':
//         $page_name = bookReservation();
//         header('Location:' . 'http://' . $host . '/page/page?name=' . $page_name);
//         break;
//     case 'addReservation':
//         //  fonction de création de groupe
//         $reservation_name = addReservation();
//         header('Location:' . 'http://' . $host . '/page/reservation?name=' . $reservation_name);
//         break;
//     case 'editReservation':
//         //  fonction de changement de bannière
//         $reservation_name = editReservation();
//         header('Location:' . 'http://' . $host . '/page/reservation?name=' . $reservation_name);
//         break;
//     case 'removeReservation':
//         //  fonction de changement de bannière
//         $reservation_name = removeReservation();
//         header('Location:' . 'http://' . $host . '/home');
//         break;
//     case 'changePagePicture':
//         //  fonction de changement de bannière
//         $page_name = changePagePicture();
//         header('Location:' . 'http://' . $host . '/page/page?name=' . $page_name);
//         break;
//     case 'changeUserPicture':
//         // fonctoin de changement de photo de profil
//         $username = changeUserPicture();
//         header('Location:' . 'http://' . $host . '/user?name='. $username);
//         break;
    
//     default:
//         header('Location:' . 'http://' . $host . '/home');
//         break;
}