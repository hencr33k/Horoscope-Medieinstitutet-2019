<?php
parse_str(file_get_contents("php://input"), $_PUT);
require_once("addHoroscope.php");
if((isset($_SESSION["Horoscope"])) && (isset($_PUT["birthDate"]))) {
    $date = $_PUT["birthDate"];  
    $formatDate = str_replace("-","",$date);
    $result = calcHoroscope($date, $formatDate);
    if($result == "FALSE") {
        echo "false";
    } else if($result == "TRUE") {
        echo "true";
    }
} else {
    echo "false";
}
?>