<?php
session_start();
require_once('funcs.php');
loginCheck();

// POSTデータ取得
$genre = $_POST['genre'];
$note = $_POST['note'];
$youtube = $_POST['url'];

// DB接続します
$pdo = db_conn();

//データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO
        cheerpark_an_tableβ1( id, youtube, note, genre, date )
        VALUES( NULL, :youtube, :note, :genre, now() ) ');

// バインド変数を用意
$stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
$stmt->bindValue(':youtube', $youtube, PDO::PARAM_STR);
$stmt->bindValue(':note', $note, PDO::PARAM_STR);

// 実行
$status = $stmt->execute(); //true or false

// データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    //home.phpへリダイレクト
    redirect('home.php');
};
