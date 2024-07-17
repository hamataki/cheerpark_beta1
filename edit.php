<?php
session_start();
require_once('funcs.php');
loginCheck();

$id = $_GET['id']; //?id~**を受け取る
$pdo = db_conn();

// データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM cheerpark_an_tableβ WHERE id=:id;');

$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// データ表示
if ($status == false) {
    sql_error($stmt);
} else {
    $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit</title>

    <!-- Favicon -->
    <link rel="icon" href="img/hat.jpg" />

    <!-- 絵文字 -->
    <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="flex justify-center">
        <div class="w-full min-w-96 max-w-md p-5 rounded-xl bg-gray-50 text-gray-800">
            <h1 class="text-2xl font-bold text-center">[編集]</h1>




            <form method="POST" action="update.php" enctype="multipart/form-data">
                <div class="text-center m-4">
                    <select id="genre" name="genre" class="w-3/5 px-1 py-3 text-center bg-gray-800 text-gray-100 rounded-3xl" required>
                        <option value="">ジャンルを選択して下さい</option>
                        <!-- ジャンルリスト -->
                        <?php
                        $genres = ["プレー集", "トレーニング", "自己解説", "食", "海外文化", "移籍関連", "その他"];
                        foreach ($genres as $genre) {
                            $selected = $row['genre'] == $genre ? 'selected' : '';
                            echo "<option value='$genre' $selected>$genre</option>";
                        } ?>
                    </select><br>
                </div>

                <!-- <div class="flex justify-center text-center m-4">
                    <label id="label_imgfile" for="imgfile" class="text-1 font-bold w-3/5 px-1 py-3 text-center bg-gray-50 border-2 border-gray-500 rounded-full">
                        <span class="">動画を選択</span>
                    </label>
                    <input accept="image/*" id="imgfile" type="file" name="imgfile" class="hidden">
                </div> -->

                <div class="flex justify-center text-center m-4">
                    <label id="label_imgfile" for="url" class="text-1 font-bold w-3/5 px-1 py-3 text-center bg-gray-50 border-2 border-gray-500 rounded-full">
                        <span class="">動画を選択</span>
                    </label>
                    <input type="text" id="url" name="url"  class="">
                </div>

                <div class="flex justify-center text-center m-2">
                    <?php if (!empty($row['imgfile'])) : ?>
                        <div class="w-full relative pb-[56.25%] pt-8 h-0 rounded-lg overflow-hidden [&_iframe]:absolute [&_iframe]:top-0 [&_iframe]:left-0 [&_iframe]:w-full [&_iframe]:h-full">';
                            <?= ($row['imgfile'])  ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- else追加→既存画像なしでもimg要素を作成→jsでpreviewを操作できる -->
                <!-- <div class="flex justify-center text-center m-4">
                    <div class="preview h-28 hidden"></div>
                </div> -->

                <div class="space-y-1 text-center m-5">
                    <div class="text-center">
                        <label for="note" class="block text-1 font-bold text-left">Note</label>
                    </div>
                    <textArea id="note" name="note" rows="4" cols="40" class="w-4/5 px-4 py-3 text-sm border-2 border-gray-500 bg-gray-50 text-gray-800 focus:border-blue-600 rounded-2xl"><?= $row['note'] ?></textArea>
                </div>

                <div class="text-center m-4">
                    <button type="post" class="px-4 py-1 font-semibold bg-gray-800 text-gray-100 rounded-xl">
                        <i class="fa-solid fa-circle-plus text-3xl"></i>
                        <p class="text-xs">再投稿</p>
                    </button>
                </div>
                <div class="text-center m-4">
                    <input type="hidden" name="id" value="<?= $id ?>">
                </div>
            </form>

            <div class="flex justify-center sticky bottom-0">
                <?php include("html/base.html"); ?>
            </div>

            <div class="flex justify-center bottom-0">
                <?php include("html/footer.html"); ?>
            </div>
        </div>

        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/script.js"></script>
</body>

</html>