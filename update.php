<?php
session_start();
require_once('funcs.php');
loginCheck();

// // 画像アップロードの処理
// $imgfile = '';
// if (isset($_FILES['imgfile'])) {
//     //フォームから画像が送られてきたら。

//     //ファイルの保存先を生成
//     $upload_file = $_FILES['imgfile']['tmp_name'];
//     $extension = pathinfo($_FILES['imgfile']['name'], PATHINFO_EXTENSION);
//     $new_name = uniqid() . '.' . $extension;
//     $image_path = 'img/' . $new_name;

//     //一時保存先から生成したファイルの保存先に移動
//     if (move_uploaded_file($upload_file, $image_path)) {
//         //contentsテーブルに保存するために、ファイルパスを変数に入れる。
//         $imgfile = $image_path;
//     };
// };

// DB接続します
$pdo = db_conn();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $note = $_POST['note'];
    $genre = $_POST['genre'];
    $id = $_POST['id'];

    if (isset($_POST['imgfile']) && $_POST['imgfile']['error'] === UPLOAD_ERR_OK) {

        //データ登録SQL作成
        $stmt = $pdo->prepare('UPDATE cheerpark_an_tableβ SET imgfile = :imgfile, note = :note, genre = :genre, date = now() WHERE id = :id');
        $stmt->bindValue(':imgfile', $imgfile, PDO::PARAM_STR);

    } else {
        $stmt = $pdo->prepare('UPDATE cheerpark_an_tableβ SET note = :note, genre = :genre WHERE id = :id');
        
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