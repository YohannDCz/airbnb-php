<?php 
session_start();
if ($_SESSION["themeColor"] === "white" || $_SESSION["textColor"] === "black") {
    $_SESSION["themeColor"] = "#141617";
    $_SESSION["textColor"] = "#e3dfd9";
    $_SESSION["inputColor"]= "#EDD54C";
}

else if ($_SESSION["themeColor"] !== "white" || $_SESSION["textColor"] !== "black") {
    $_SESSION["themeColor"] = "white";
    $_SESSION["textColor"] = "black";
    $_SESSION["inputColor"]= "#EDD54C";
}
// // code trouvé sur https://stackoverflow.com/questions/5285031/back-to-previous-page-with-header-location-in-php
header('Location: ' . $_SERVER['HTTP_REFERER']);

exit;