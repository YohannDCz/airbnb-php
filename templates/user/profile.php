<?php
require_once '../../src/model/Database.php';

//Connecter la BDD
$db = new Database();

// Ouverture de la connection
$connection = $db->getConnection();

$rawprofildata = file_get_contents('php://input');
$profildata = json_decode($rawprofildata);

$afficher_profil = $connection->prepare(
  "SELECT * 
    FROM users 
    WHERE id = :id
  ");

$resultat = $afficher_profil ->execute(array(
  'id' => $profildata->id
));

$data = $afficher_profil->fetch();

$profil = json_encode($data);

echo $profil;

?>