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

    <title>Sign Up</title>

    <!-- Favicon -->
    <link rel="icon" href="img/hat.jpg" />

    <!-- 絵文字 -->
    <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-default">Sign Up</nav>
        </header>

        <div class="main">
            <form method="POST" action="join.php">
                <div class="signup">
                    <label>名前:<input type="text" name="name" placeholder="山田 太郎" class=""></label><br>
                    <label>Email:<input type="text" name="email" placeholder="test@gmail.com" class=""></label><br>
                    <label>ユーザーID:<input type="text" name="lid" placeholder="ID" class=""></label><br>
                    <label>PW:<input type="password" name="lpw" placeholder="PW" class=""></label><br>
                    <label><input type="hidden" name="kanri_flg"></label><br>
                    <label><input type="hidden" name="life_flg"></label><br>

                    <input type="submit" value="送信" class="">
                </div>
            </form>
        </div>

        <?php include("html/footer.html"); ?>

    </div>
</body>

</html>