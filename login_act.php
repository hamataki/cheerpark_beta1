<?php
session_start();
require_once('funcs.php');
// loginCheck();

$pdo = db_conn();

//POST値を受け取る
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];

// データ登録SQL作成
// gs_user_tableに、IDとWPがあるか確認する。
$stmt = $pdo->prepare('SELECT * FROM cheerpark_user_tableβ1 WHERE lid = :lid');
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
// $stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$status = $stmt->execute();

// SQL実行時にエラーがある場合STOP
if ($status === false) {
    sql_error($stmt);
}

// 抽出データ数を取得
$val = $stmt->fetch(); //1レコードだけ取得する方法
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()

//該当１レコードがあればSESSIONに値を代入
//入力したPasswordと暗号化されたPasswordを比較！[戻り値：true,false]
$pw = password_verify($lpw, $val["lpw"]); //$lpw = password_hash($lpw, PASSWORD_DEFAULT);   //パスワードハッシュ化
if ($pw) { //* PasswordがHash化の場合はこっちのIFを使う


    //Login成功時 該当レコードがあればSESSIONに値を代入
    $_SESSION['chk_ssid'] = session_id();
    $_SESSION['kanri_flg'] = $val['kanri_flg'];
    $_SESSION['user_id'] = $val['id'];

    //Login成功時（post.phpへ）
    redirect("post.php");
} else {
    //Login失敗時(login.phpへ)
    redirect("login.php");
}
exit();
