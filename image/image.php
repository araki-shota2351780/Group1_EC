<?php
if (
   !isset($_POST['title']) || $_POST['title'] === ''
   || !isset($_FILES['file']) || $_FILES['file'] === ''
) {
   exit('入力されていません');
}
$title = $_POST['title'];
$file = $_FILES['file'];
// DB接続
try {
   $pdo = new PDO(
    'mysql:host=mysql304.phy.lolipop.lan;dbname=LAA1554924-php2024;charset=utf8','LAA1554924','Pass0811');
} catch (PDOException $e) {
   echo json_encode(["db error" => "{$e->getMessage()}"]);
   exit();
}
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
} else {
   if (!empty($_FILES['file']['name'])) {
   //['file']['tmp_name']は画像のパス
       $content = file_get_contents($_FILES['file']['tmp_name']);
       // 画像を保存
       $sql = 'INSERT INTO test(merch_id, , image) VALUES (1, :title, :picture)';
       $stmt = $pdo->prepare($sql);
       $stmt->bindValue(':title', $title, PDO::PARAM_STR);
       // 画像データをバイナリ形式でデータベースに挿入
       $stmt->bindValue(':picture', file_get_contents($_FILES['file']['tmp_name']), PDO::PARAM_LOB);
       // SQL実行（実行に失敗すると `sql error ...` が出力される）
       try {
           $status = $stmt->execute();
       } catch (PDOException $e) {
           echo json_encode(["sql error" => "{$e->getMessage()}"]);
           exit();
       }
   }
}
//⇒うまくいけば入力画面でsubmitしたデータがDBのテーブルに保存される
header('Location:input.php');
exit();