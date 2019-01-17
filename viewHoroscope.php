<?php
session_start();
if(isset($_SESSION["Horoscope"])) {
    echo $_SESSION["Horoscope"];
} 
?>