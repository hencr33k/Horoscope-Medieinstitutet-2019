<?php
session_start();
if(isset($_SESSION["Horoscope"])) {
    unset($_SESSION["Horoscope"]);
    echo "true";
} else {
    echo "false";
}
?>