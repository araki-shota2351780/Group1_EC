<?php
// データベース接続
$pdo = new PDO(
    'mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1554909-asoec;charset=utf8',
    'LAA1554909',
    'G1100584a'
);

// フォームから送信されたデータを取得
$merch_id = $_POST['merch_id'];
$merch_name = $_POST['merch_name'];
$merch_amount = $_POST['merch_amount'];
$merch_qua = $_POST['merch_qua'];
$merch_date = $_POST['merch_date'];

$sql = "INSERT INTO merchandise (merch_id, merch_name, merch_amount, merch_quantity, merch_description) 
        VALUES (:merch_id, :merch_name, :merch_amount, :merch_quantity, :merch_description)";

// SQLステートメントの準備
$stmt = $pdo->prepare($sql);

// パラメータをバインド
$stmt->bindParam(':merch_id', $merch_id, PDO::PARAM_STR);
$stmt->bindParam(':merch_name', $merch_name, PDO::PARAM_STR);
$stmt->bindParam(':merch_amount', $merch_amount, PDO::PARAM_INT);
$stmt->bindParam(':merch_qua', $merch_qua, PDO::PARAM_INT);
$stmt->bindParam(':merch_date', $merch_date, PDO::PARAM_STR);

// SQLを実行し、データを挿入
if ($stmt->execute()) {
    echo "商品が正常に登録されました。";
} else {
    echo "商品登録に失敗しました。";
}
?>
