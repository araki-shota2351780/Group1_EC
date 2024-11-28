<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>クレジットカード画面</title>
<link rel="stylesheet" href="./css/checkout.css">
</head>
<body>
<div class="container">
    <!-- × ボタンはコンテナ内に配置 -->
    <span class="close-button" onclick="location.href='cart.html'">×</span>
    <h2><em>CHECKOUT</em></h2>
    ￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣
        </script>
    <h4>クレジットカード</h4>
    <form action="#" method="post">
    <input type="number" id="card_id" name="card_id"  placeholder="カード番号" required><br>
    <input type="number" id="card_num" name="card_num"  placeholder="セキュリティーコード" required><br>
    <input type="text" id="card_name" name="card_name"  placeholder="カード名義人" required><br>
        <h5>有効期限</h5>
        <input type="date" id="card_date" name="card_date"  required><br>
        <h4>受け取り方法</h4>
        <input type="radio" name="receive[]" value="置き">置き配（配達BOX）<br>
        <input type="radio" name="receive[]" value="対面">対面で受け取り<br>
        <button type="button" onclick="redirectToPage()">最終確認へ進む</button>
    </form>
</div>
</body>
</html>