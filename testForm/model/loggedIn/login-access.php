<?php
session_start();

// Ellenőrizd, hogy van-e bejelentkezett felhasználó
if (isset($_SESSION['user'])) {
    $loggedInUser = $_SESSION['user'];
} else {
    // Ha nincs bejelentkezett felhasználó, irányítsd vissza a bejelentkező oldalra
    header('Location: ../login.php');
    exit();
}
