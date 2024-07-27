<?php
require_once('funcs.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign Up</title>

    <!-- Favicon -->
    <link rel="icon" href="img/hat.jpg" />

    <!-- 絵文字 -->
    <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="flex justify-center">
        <div class="w-full min-w-96 max-w-lg p-5 rounded-xl bg-gray-50 text-gray-800">
            <header>
                <nav class="text-2xl font-bold text-center">Sign Up</nav>
            </header>

            <div class="main">
                <form method="POST" action="join.php">
                    <div class="space-y-1 text-sm">
                        <label for="name" class="block text-gray-600">Name</label>
                        <input type="text" name="name" placeholder="山田 太郎" class="w-full px-4 py-3 rounded-md border-gray-300 bg-gray-50 text-gray-800 focus:border-blue-600">
                    </div>

                    <div class="space-y-1 text-sm">
                        <label for="email" class="block text-gray-600">Email</label>
                        <input type="text" name="email" placeholder="test@gmail.com" class="w-full px-4 py-3 rounded-md border-gray-300 bg-gray-50 text-gray-800 focus:border-blue-600">
                    </div>

                    <div class="space-y-1 text-sm">
                        <label for="username" class="block text-gray-600">Username</label>
                        <input type="text" placeholder="Username" name="lid" id="username" class="w-full px-4 py-3 rounded-md border-gray-300 bg-gray-50 text-gray-800 focus:border-blue-600">
                    </div>

                    <div class="space-y-1 text-sm">
                        <label for="lpw" class="block text-gray-600">Password</label>
                        <input type="password" name="lpw" placeholder="PW" class="w-full px-4 py-3 rounded-md border-gray-300 bg-gray-50 text-gray-800 focus:border-blue-600">
                    </div>

                    <div class="space-y-1 text-sm">
                        <label><input type="hidden" name="kanri_flg"></label><br>
                        <label><input type="hidden" name="life_flg"></label><br>
                    </div>

                    <button type="submit" value="LOGIN" class="w-full px-8 py-3 font-semibold rounded-full bg-gray-800 text-gray-100">Sign Up</button>

                </form>
            </div>
            <div class="flex justify-center absolute bottom-0">
                <?php include("html/footer.html"); ?>
            </div>
        </div>
    </div>
</body>

</html>