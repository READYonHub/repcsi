<?php

$invalid = ""; // hibaüzenet tárolására

if (isset($_POST["submit"])) {
    if (empty($_POST['user']) || empty($_POST['pass'])) {
        $invalid = 'Mindkét adatot meg kell adnod!';
    } else {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $conn = mysqli_connect('localhost', 'root', '');

        if (!$conn) {
            die('Kapcsolódási hiba: ' . mysqli_connect_error());
        }

        $db = mysqli_select_db($conn, 'repcsi');

        if (!$db) {
            die('Adatbázis kiválasztási hiba: ' . mysqli_error($conn));
        }

        $query = mysqli_query($conn, "SELECT * FROM form WHERE password='$pass' AND username='$user'");

        if (!$query) {
            die('Lekérdezési hiba: ' . mysqli_error($conn));
        }

        $rows = mysqli_num_rows($query);

        if ($rows == 1) {
            header('Location: ../loggedIn/login-access.php');
            //exit(); // fontos: a header() után azonnal kilépni a szkriptből
        } else {
            $invalid = 'Rossz felhasználónév vagy jelszó';
        }

        mysqli_close($conn);
    }
}
