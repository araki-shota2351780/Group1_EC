<?php
session_start();

// フォームデータを受け取る
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 他のデータも受け取る
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $zip_code = $_POST['zip_code'];
    $prefecture = $_POST['prefecture'];
    $city = $_POST['city'];
    $house_number = $_POST['house_number'] ?? '';
    $building_name = $_POST['building_name'] ?? '';
    $payment_method = $_POST['payment_method'];

    // 一時的にセッションにデータを保存
    $_SESSION['name1'] = $name1;
    $_SESSION['name2'] = $name2;
    $_SESSION['zip_code'] = $zip_code;
    $_SESSION['prefecture'] = $prefecture;
    $_SESSION['city'] = $city;
    $_SESSION['house_number'] = $house_number;
    $_SESSION['building_name'] = $building_name;
    $_SESSION['payment_method'] = $payment_method;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>代金引換画面</title>
<link rel="stylesheet" href="./css/checkout.css">
</head>
<body>
<div class="container">
    <!-- × ボタンはコンテナ内に配置 -->
    <span class="close-button" onclick="location.href='checkout.php'">×</span>
    <h2><em>CHECKOUT</em></h2>
    ￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣
    <h4>代金引換</h4>
    <form action="payment.php" method="post">
        <h4>代金引換の場合、置き配は出来ません、対面受け取りのみとなります。</h4>
        <input type="radio" name="receive_method" value="対面" required>対面で受け取り<br>

        <input type="submit" value="最終確認へ進む" action="payment.php">
    </form>
</div>
</body>
</html>
