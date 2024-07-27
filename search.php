<?php
session_start();
require_once('funcs.php');
loginCheck();

// DB接続します
$pdo = db_conn();
$genre = $_POST['genre'];

// データ取得SQL作成
if ($genre == 'ALL') {
    $stmt = $pdo->prepare("SELECT * FROM cheerpark_an_tableβ1");
} else {
    $stmt = $pdo->prepare("SELECT * FROM cheerpark_an_tableβ1 WHERE genre = :genre");
    $stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
};

$status = $stmt->execute();

// データ表示
$view = "";
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:" . $error[2]);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<div class="p-4 py-3 border-2 border-gray-500 bg-gray-50 rounded-2xl">';
        if ($_SESSION['user_id'] === $result['user_id']) {

            $view .= '<a href="edit.php?id=' . $result['id'] . '">';
            // $view .= '<img src="' . $result["imgfile"] . '" alt="uploaded image" class="m-1 h-28">';
            $view .= '<div class="relative pb-[56.25%] pt-8 h-0 rounded-md overflow-hidden [&_iframe]:absolute [&_iframe]:top-0 [&_iframe]:left-0 [&_iframe]:w-full [&_iframe]:h-full">';
            // youtubeの埋め込み
            $view .= $result['youtube'];
            $view .= '</div>';

            $view .= '<div class="text-center">';
            $view .= $result['date'] . ' # ' . $result['genre'];
            $view .= '</div>';
            $view .= '</a>';

            if ($_SESSION['kanri_flg'] !== 1) {
                $view .= '<a href="delete.php?id=' . $result['id'] . '" class="flex justify-end">';
                $view .= '<i class="fa-solid fa-trash"></i>';
                $view .= '</a>';
            }
        } else {
            $view .= '<div class="relative pb-[56.25%] pt-8 h-0 rounded-md overflow-hidden [&_iframe]:absolute [&_iframe]:top-0 [&_iframe]:left-0 [&_iframe]:w-full [&_iframe]:h-full">';
            // youtubeの埋め込み
            $view .= $result['youtube'];
            $view .= '</div>';
            $view .= '<div class="text-center">';
            $view .= $result['date'] . ' # ' . $result['genre'];
            $view .= '</div>';
        }

        if ($_SESSION['kanri_flg'] === 1) {
            $view .= '<a href="delete.php?id=' . $result['id'] . '" class="flex justify-end">';
            $view .= '<i class="fa-solid fa-trash"></i>';
            $view .= '</a>';
        }

        $view .= '</div>';
    };
};
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>

    <!-- Favicon -->
    <link rel="icon" href="img/hat.jpg" />

    <!-- 絵文字 -->
    <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="flex justify-center">
        <div class="w-full min-w-96 max-w-lg p-5 rounded-xl bg-gray-50 text-gray-800">
            <h1 class="text-2xl font-bold text-center">
                <i class="fa-solid fa-house"></i>
                <p class="text-xs text-center">ホーム</p>
            </h1>

            <div class="text-right">
                <form action="search.php" method="POST" enctype="multipart/form-data">
                    <div class="flex justify-end">
                        <select id="genre" name="genre">
                            <option value="ALL">ALL</option>
                            <?php
                            $genres = ["プレー集", "トレーニング", "自己解説", "食", "海外文化", "移籍関連", "その他"];
                            foreach ($genres as $genre) {
                                $selected = $_POST['genre'] == $genre ? 'selected' : '';
                                echo "<option value='$genre' $selected>$genre</option>";
                            } ?>
                        </select>

                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass">検索</i>
                        </button>
                    </div>
                </form>

                <div class="flex justify-end text-right">
                    <div class="m-1 text-center">
                        <a href="" class="text-right"><i class="fa-solid fa-gear text-center"></i>
                            <p class="text-xs" text-center>設定</p>
                        </a>
                    </div>
                    <div class="m-1 text-center">
                        <a href="logout.php" class=""><i class="fa-solid fa-right-from-bracket text-center"></i>
                            <p class="text-xs text-center">ログアウト</p>
                        </a>
                    </div>
                </div>
            </div>


            <div class="m-2 p-1 grid grid-cols-2 gap-4">
                <?= $view ?>
            </div>


            <div class="flex justify-center sticky bottom-0">
                <?php include("html/base.html"); ?>
            </div>

            <div class="flex justify-center bottom-0 min-w-96">
                <?php include("html/footer.html"); ?>
            </div>

        </div>
</body>

</html>