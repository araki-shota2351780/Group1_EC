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
    <title>コンビニ払い画面</title>
    <link rel="stylesheet" href="./checkout/css/checkout.css">
    <link rel="stylesheet" href="./checkout/css/conveni.css">
</head>
<body>
    <div class="container">
        <!-- × ボタンはコンテナ内に配置 -->
        <span class="close-button" onclick="location.href='checkout.php'">×</span>
        <h2><em>CHECKOUT</em></h2>
        ￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣
        <h4>コンビニ画面</h4>
        <form action="payment.php" method="post">
        <ul class="convenience-list">
        <li class="convenience-item">
            <input type="radio" name="conveni[]" value="ファミマ" id="familymart">
            <label for="familymart">
                <img src="http://aso2301212.mods.jp/EC/checkout/img/ファミリーマート.png"  height=20rem>
                ファミリーマート
            </label>
        </li>
        <li class="convenience-item">
            <input type="radio" name="conveni[]" value="ローソン" id="lawson">
            <label for="lawson">
                <img src="http://aso2301212.mods.jp/EC/checkout/img/ローソン.png"  height=20rem>
                ローソン
            </label>
        </li>
        <li class="convenience-item">
            <input type="radio" name="conveni[]" value="デイリーヤマザキ" id="dailyyamazaki">
            <label for="dailyyamazaki">
                <img src="http://aso2301212.mods.jp/EC/checkout/img/デイリーヤマザキ.png"  height=20rem>
                デイリーヤマザキ
            </label>
        </li>
        <li class="convenience-item">
            <input type="radio" name="conveni[]" value="ミニストップ" id="ministop">
            <label for="ministop">
                <img src="http://aso2301212.mods.jp/EC/checkout/img/ミニストップ.png"  height=20rem>
                ミニストップ
            </label>
        </li>
        <li class="convenience-item">
            <input type="radio" name="conveni[]" value="セブンイレブン">
            <label for="seveneleven">
                <img src="http://aso2301212.mods.jp/EC/checkout/img/セブンイレブン.png"  height=20rem>
                セブンイレブン
            </label>
        </li>
        <h5>注文を確定されてから24時間以内お支払いがされなかった場合自動的に注文はキャンセルされます</h5>

            <h4>受け取り方法</h4>
            <input type="radio" name="receive_method" value="置き" required>置き配（配達BOX）<br>
            <input type="radio" name="receive_method" value="対面"required>対面で受け取り<br>
            <input type="submit" value="最終確認へ進む">
        </form>
    </div>
</body>
</html>
