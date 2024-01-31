<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

$conn = mysqli_connect('localhost', 'root', '');


//sikertelen adatbázis szerverhez kapcsolódás
if (!$conn) {
    die('Kapcsolódási hiba: ' . mysqli_connect_error());
}

//adatbázishoz kapcsolódás
$db = mysqli_select_db($conn, 'repcsi');

//sikertelen adatbázis kapcsolódás esetén
if (!$db) {
    die('Adatbázis kiválasztási hiba: ' . mysqli_error($conn));
}

//lekérdezés
$query = mysqli_query($conn, "SELECT * FROM form WHERE password='$pass' AND username='$user'");

//sikertelen lekérdezés esetén
if (!$query) {
    die('Lekérdezési hiba: ' . mysqli_error($conn));
}

$rows = mysqli_num_rows($query);

//bejelentkezés ellenőrzése
if ($rows == 1) {
    // Bejelentkezés sikerült, tárold el a felhasználó nevét a SESSION változóban
    session_start();
    $_SESSION['user'] = $user;

    header('Location: ../loggedIn/login-access.php');
    exit(); // fontos: a header() után azonnal kilépni a szkriptből
} else {
    $invalid .= 'Rossz felhasználónév vagy jelszó';
}

mysqli_close($conn);
