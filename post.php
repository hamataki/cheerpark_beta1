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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Post</title>

    <!-- Favicon -->
    <link rel="icon" href="img/hat.jpg" />

    <!-- 絵文字 -->
    <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="flex justify-center">
        <div class="w-full min-w-96 max-w-lg p-5 rounded-xl bg-gray-50 text-gray-800">
            <h1 class="text-2xl font-bold text-center">今日はなにを伝えたい？</h1>

            <form action="insert.php" method="post" enctype="multipart/form-data">
                <div class="text-center m-4">
                    <select id="genre_select" name="genre" class="w-3/5 px-1 py-3 text-center bg-gray-800 text-gray-100 rounded-3xl" required>
                        <option value="">ジャンルを選択</option>
                        <option value="プレー集">プレー集</option>
                        <option value="トレーニング">トレーニング</option>
                        <option value="自己解説">自己解説</option>
                        <option value="食">食</option>
                        <option value="海外文化">海外文化</option>
                        <option value="移籍関連">移籍関連</option>
                        <option value="その他">その他</option>
                    </select>
                </div>

                <div class="text-center m-4">
                    <label id="label_youtube" for="youtube" class="text-center px-7 py-3 bg-gray-50 border-2 border-gray-500 rounded-full">
                        <span class="text-1 font-bold">動画を選択</span>
                    </label><br>
                    <div class="m-4">
                        <input type="text" id="youtube" name="youtube" class="w-full"  placeholder="<iframe width='' height='' src='https://www.youtube.com/embed/' title='' ></iframe>" required>
                    </div>
                </div>

                <div class="flex justify-center text-center m-4">
                    <div id="preview" class="h-24 w-full relative pb-[56.25%] pt-8 h-0 rounded-lg overflow-hidden [&_iframe]:absolute [&_iframe]:top-0 [&_iframe]:left-0 [&_iframe]:w-full [&_iframe]:h-full"></div>
                </div>

                <div class="space-y-1 text-center m-5">
                    <div class="text-center">
                        <label for="note" class="block text-1 font-bold text-left">Note</label>
                    </div>
                    <textarea id="note" name="note" placeholder="伝えたいこと" class="w-4/5 px-4 py-3 text-sm border-2 border-gray-500 bg-gray-50 text-gray-800 focus:border-blue-600 rounded-2xl" required></textarea>
                </div>

                <div class="text-center m-4">
                    <button type="post" class="px-4 py-1 font-semibold bg-gray-800 text-gray-100 rounded-xl">
                        <i class="fa-solid fa-circle-plus text-3xl"></i>
                        <p class="text-xs">投稿</p>
                    </button>
                </div>
            </form>

            <div class="flex justify-center sticky bottom-0">
                <?php include("html/base.html"); ?>
            </div>

            <div class="flex justify-center bottom-0">
                <?php include("html/footer.html"); ?>
            </div>
        </div>
    </div>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>