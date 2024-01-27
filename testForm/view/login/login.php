<?php
include("../../model/login/loginserv.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .login {
            width: 300;
            border: 5px solid #75b1d6;
            padding: 10px 50px 30px;
            margin: 30px auto;
            margin-top: 60px;
        }
    </style>
</head>

<body>

    <div class="login">
        <h1 style=" text-align: center;">Login</h1>
        <form action="" method="post" style="text-align: center;">
            <input type="text" placeholder="Username" id="user" name="user"><br>
            <input type="password" placeholder="Password" id="pass" name="pass"><br>
            <input type="submit" value="login" name="submit"><br>
            <span><?php echo $invalid; ?></span>
        </form>
    </div>
</body>

</html>