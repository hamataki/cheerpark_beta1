<?php
session_start();
require_once('funcs.php');
loginCheck();

// DB接続します
$pdo = db_conn();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $note = $_POST['note'];
    $genre = $_POST['genre'];
    $id = $_POST['id'];

    if (isset($_POST['youtube']) && $_POST['youtube']['error'] === UPLOAD_ERR_OK) {

        //データ登録SQL作成
        $stmt = $pdo->prepare('UPDATE cheerpark_an_tableβ1 SET youtube = :youtube, note = :note, genre = :genre, date = now() WHERE id = :id');
        $stmt->bindValue(':youtube', $youtube, PDO::PARAM_STR);

    } else {
        $stmt = $pdo->prepare('UPDATE cheerpark_an_tableβ1 SET note = :note, genre = :genre WHERE id = :id');
        
    }
    // バインド変数を用意
    $stmt->bindValue(':note', $note, PDO::PARAM_STR);
    $stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
    $stmt->bindValue(':id',     $id,     PDO::PARAM_INT);

    // 実行
    $status = $stmt->execute(); //true or false

    // データ登録処理後
    if ($status === false) {
        sql_error($stmt);
    } else {
        redirect('home.php');
    };
};