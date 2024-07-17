<?php
session_start();
require_once('funcs.php');
loginCheck();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <title>Start画面</title>

    <!-- Favicon -->
    <link rel="icon" href="img/hat.jpg" />

    <!-- 絵文字 -->
    <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-default">START</nav>
        </header>

        <div class="main">
            <div class="button-area">
                <a href="./signup.php"><button type="submit" class="">Plaeyer</button></a>
                <a onclick="location.href='./.php'"><button type="submit" class="">Sporter</button></a>
            </div>
        </div>
        
        <?php include("html/footer.html"); ?>

    </div>
</body>

</html>