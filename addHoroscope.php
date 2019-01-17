<?php   
    session_start();
    if(!(isset($_SESSION["Horoscope"])) && (isset($_POST["birthDate"]))) {
        $date = $_POST["birthDate"];  
        $formatDate = str_replace("-","",$date);
        $result = calcHoroscope($date, $formatDate);
        if($result == "FALSE") {
            echo "false";
        } else if($result == "TRUE") {
            echo "true";
        }
    } else if(!(isset($_PUT["birthDate"]))){
        echo "false";
    }     
    function calcHoroscope($date, $formatDate) {
        if (($formatDate >= 121) && ($formatDate <= 218)) {
            $_SESSION["Horoscope"] = "Vattuman. Du kommer ha lycka i affärer i snara framtiden!";
        } else if (($formatDate >= 219) && ($formatDate <= 320)) {
            $_SESSION["Horoscope"] = "Fisk. Du kommer träffa en speciell person snart.";
        } else if (($formatDate >= 321) && ($formatDate <= 420)) {  
            $_SESSION["Horoscope"] = "Vädur. Du måste akta dig för svarta katter denna månaden.";
        } else if (($formatDate >= 421) && ($formatDate <= 521)) {
            $_SESSION["Horoscope"] = "Oxe. Du kommer ha tur denna månad.";
        } else if (($formatDate >= 522) && ($formatDate <= 621)) {
            $_SESSION["Horoscope"] = "Tvilling. Var inte rädd för att gå emot strömmen denna månad.";
        } else if (($formatDate >= 622) && ($formatDate <= 722)) {
            $_SESSION["Horoscope"] = "Kräfta. Du kommer få en oväntad vän när det behövs.";
        } else if (($formatDate >= 723) && ($formatDate <= 823)) {
            $_SESSION["Horoscope"] = "Lejon. Ditt liv ändras snart, till det bättre.";
        } else if (($formatDate >= 824) && ($formatDate <= 922)) {
            $_SESSION["Horoscope"] = "Jungfru. Sök det som du aldig vågat förut.";
        } else if (($formatDate >= 923) && ($formatDate <= 1023)) {
            $_SESSION["Horoscope"] = "Våg. Du måste se dig omkring, alla är inte vad du tror dem är.";
        } else if (($formatDate >= 1024) && ($formatDate <= 1122)) {
            $_SESSION["Horoscope"] = "Skorpion. Stanna upp och ta ett andetag, innan du gör viktiga beslut.";
        } else if (($formatDate >= 1123) && ($formatDate <= 1221)) {
            $_SESSION["Horoscope"] = "Skytt. Sköt dina finanser för att få en riklig belöning";
        } else if ((($formatDate >= 1222) && ($formatDate <= 1231)) || (($formatDate >= 11) && ($formatDate <=120))) {
            $_SESSION["Horoscope"] = "Stenbock. En oväntad händelse kommer slå dig hårt, stå stadigt.";
        } else {
            return "FALSE";
        }
        return "TRUE";
    }
?>