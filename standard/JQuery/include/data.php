<?php
header("Access-Control-Allow-Origin: http://localhost:80");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: Content-Type, Authorization");


if($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST["action"] == "display"){
        echo "display is entered";
    }

    if($_POST["action"] == "show"){
        echo "show is entered";
    }


}

?>