<?php
session_start();
require_once('funcs.php');
loginCheck();

// POSTデータ取得
$id = $_GET['id'];

// DB接続します
$pdo = db_conn();

// データ登録SQL作成
$stmt = $pdo->prepare('DELETE FROM cheerpark_an_tableβ WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

// データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('home.php');
};
