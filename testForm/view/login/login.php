<?php
include("../../model/login/loginserv.php");
include("../src/css/login.php");
include("../../model/login/loginInputText.php");
include("../../model/login/headTag.php");
include("../src/css/background.php");
include("../src/index/background.php");
include("../src/css/input.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php echo $headTag ?>
<?php echo $loginBackground ?>
<?php echo $inputTypeText ?>

<body>
    <!--<?php echo $backgroundDiv ?>-->
    <div class="login">
        <h1 id="title">Login</h1>
        <form action="" method="post" style="text-align: center;">

            <?php echo $inputText ?>
            <input type="submit" value="login" name="submit" id="submit"><br>

            <p id="alreadyAccText">Already have an account? <a href="../error/error.html">Sign in</a>.</p>

            <!--user ellenorzes-->
            <?php echo $invalid; ?>
        </form>
    </div>
</body>

</html>