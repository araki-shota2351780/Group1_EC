<?php
session_start();

// セッションからデータを取得
$name1 = $_SESSION['name1'];
$name2 = $_SESSION['name2'];
$zip_code = $_SESSION['zip_code'];
$prefecture = $_SESSION['prefecture'];
$city = $_SESSION['city'];
$house_number = $_SESSION['house_number'];
$building_name = $_SESSION['building_name'];
$payment_method = $_SESSION['payment_method'];
//ここに合計金額を取得する式を書いてください↓

//ここに合計金額を取得する式を書いてください↑
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>購入情報登録画面</title>
<link rel="stylesheet" href="../css/checkout.css">
</head>
<body>

<div class="container">
    <!-- × ボタンはコンテナ内に配置 -->
    <span class="close-button" onclick="location.href='checkout.php'">×</span>
    <h2><em>CHECKOUT</em></h2>
    ￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣

    <h4>🛒注文内容の確認</h4>

    <!-- POSTで受け取ったデータを表示 -->
    お届け先:名前 <?php echo htmlspecialchars($name1 . ' ' . $name2); ?><br>
    〒<?php echo htmlspecialchars($zip_code); ?> <?php echo htmlspecialchars($prefecture); ?> <?php echo htmlspecialchars($city); ?> <?php echo htmlspecialchars($house_number); ?> <?php echo htmlspecialchars($building_name); ?><br>
    
    受け取り方法: 
    <?php
// フォームがPOSTで送信されてきた場合
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ラジオボタンの値が選択されている場合
    if (isset($_POST['receive_method'])) {
        // 受け取った値を変数に格納
        $receive_method = $_POST['receive_method'];
        
        // 受け取った値に応じて表示を変える
        if ($receive_method == '置き') {
            echo "置き配（配達BOX）";
        } elseif ($receive_method == '対面') {
            echo "対面で受け取り";
        }
    } else {
        // 何も選択されていない場合
        echo "受け取り方法が選択されていません。";
    }
} else {
    echo "フォームが送信されていません。";
}
?>

    <br>

    支払い方法: 
    <?php
    // 支払い方法の表示 
    echo htmlspecialchars($payment_method); 
    ?>
    <br>

    <h4>商品合計</h4>
    <?php
    // ↓
    $price = 0; // 商品の価格,ここはデータベース接続で持ってくるか、カート画面から
    $commission = 0;

    if ($payment_method == '代金引換' || $payment_method == 'コンビニ') {
        $commission = 330;
    }
    $total = $price + $commission;
    //↑ここはセッションで持ってくる。ただし、手数料の判定は残す。
    //合計金額の取得方法の変更に伴い↓の表示文も変更お願いします
    echo "品代: ￥" . number_format($price) . "<br>";
    echo "決済手数料: ￥" . number_format($commission) . "<br>";
    echo "合計金額: ￥" . number_format($total) . "<br>";
    ?>

    <!-- 最終確認ページへ進むボタン -->
    <form action="payment-complete.php" method="post">
        <input type="submit" value="注文を確定する">
    </form>
</div>

</body>
</html>