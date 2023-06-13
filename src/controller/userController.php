<?php 
require_once('./model/Database');
require_once('./model/User.php');

//Ces lignes de code ont été recyclées en partie, avec le consentement des personnes l'ayant fait, ( parce qu'on est écolo, bien sûr ) du projet précédent .
// Commentaire pour les prof

function deleteReview() {
    $userId = $_POST["userId"];
    $user = new users;
    $user->deleteReviewsByIds($userId);
    return True ;

}