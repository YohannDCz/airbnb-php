<?php 
session_start();
require_once('../model/Database.php');
require_once('../model/User.php');

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les prof

// function deleteReview() {
//     $userId = $_POST["userId"];
//     $user = new Users;
//     $user->deleteReviewsByIds($userId);
//     return True ;

// }

function login() {
    
    $user = new Users();
    $login = $_POST["email"];
    $password = $_POST["password"];
    
    setcookie("login", $login);

    $query = $user->login($login);
    $userDb = $query ? $query->fetch(PDO::FETCH_ASSOC) : false;
    $error = null;

    if ($userDb && isset($userDb["password"]) && password_verify($password, $userDb["password"])) {
        $_SESSION["loggedin"] = true;
        $_SESSION["userId"] = $userDb["id"];
        header("Location: ../../templates/general/homepage.php");
        return true;
    } else {
        echo "Identifiants invalides";
        return false;
    }
}



function signup() {

    $user = new Users();

    $adress = $_POST["adress"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $birthdate = $_POST["birthdate"];

    $resultat = $user->checkUser($email);
    if ($resultat) {
        echo "L'utilisateur existe déjà.";
      // return $error;
    } else {
        setcookie("adress", $adress);
        setcookie("first_name", $first_name);
        setcookie("last_name", $last_name);
        setcookie("phone", $phone);
        setcookie("email", $email);
        setcookie("birthdate", $birthdate);

        $user->addUser($adress, $password, $first_name, $last_name, $birthdate, $phone, $email);
        header("Location: ../../templates/user/login.php");
        
    }
}
?>
