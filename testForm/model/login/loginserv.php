<?php


$invalid = ""; // hibaüzenet tárolására

if (isset($_POST["submit"])) {
    if (empty($_POST['user']) || empty($_POST['pass'])) {
        $invalid .= '<p id="notData">Mindkét adatot meg kell adnod!</p>';
    } else {

        echo include("../../controller/login/login.php");
    }
}
