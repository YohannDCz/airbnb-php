<?php header("Content-type: text/css; charset: UTF-8");
session_start();
if (!isset($_SESSION["themeColor"]) || !isset($_SESSION["textColor"]) ) {
    $_SESSION["themeColor"] = 'white';
    $_SESSION["textColor"]  = 'black';
    $_SESSION["inputColor"] = "#EDD54C";
     }
$themeColor = $_SESSION["themeColor"];
$textColor  = $_SESSION["textColor"];
$inputColor = $_SESSION["inputColor"];
    ?>
    body {
        background-color: <?php echo $themeColor; ?>;
        
        color: <?php echo $textColor; ?>;
    }
    <!-- location.php -->
    #nav_bar input {
        background-color: <?php echo $themeColor; ?>;
    }
    
    #filtre {
        background-color: <?php echo $inputColor; ?>;
    }
    #nav_bar input {
        border-bottom: <?php echo "2px solid " . $inputColor; ?>;
    }
    button { 
        background-color: <?php echo $inputColor; ?>;
    
    }
    #nav_bar input { 
        background-color: <?php echo "2px solid " . $inputColor; ?>;
    
    }
    <!-- homepage.php -->
    div.review_element {
        background-color: <?php echo $themeColor; ?>;
        color: <?php echo $textColor; ?>;
    }