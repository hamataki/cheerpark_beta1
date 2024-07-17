<?php
session_start();
require_once('funcs.php');
loginCheck();
?>

<?php
// POSTデータ取得
$name   = $_POST['name'];
$email  = $_POST['email'];
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
$kanri_flg = 0;
$life_flg = 0;

// DB接続します
require_once('funcs.php');
$pdo = db_conn();

// $lpwをハッシュ化する
$hashed_pw = password_hash($lpw, PASSWORD_DEFAULT);

// データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO cheerpark_user_tableβ(id, name, email, lid, lpw, kanri_flg, life_flg, date)
VALUES(NULL, :name, :email, :lid, :lpw, :kanri_flg, :life_flg, now())');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $hashed_pw, PDO::PARAM_STR);
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);
$status = $stmt->execute();
// SQL実行時にエラーがある場合STOP
if ($status === false) {
    sql_error($stmt);
}

// 抽出データ数を取得
$val = $stmt->fetch(); //1レコードだけ取得する方法

// データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('login.php');
};
