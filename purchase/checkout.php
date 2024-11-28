<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>購入情報登録画面</title>
<link rel="stylesheet" href="./css/checkout.css">
</head>
<body>
<div class="container">
    <!-- × ボタンはコンテナ内に配置 -->
    <span class="close-button" onclick="location.href='cart.html'">×</span>
    <h2><em>CHECKOUT</em></h2>
    ￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣
    <script src="./js/checkout.js"></script>
    <h4>配達希望日</h4>
    <form  id="paymentForm" method="post">
        <input type="date" id="deli_date" name="deli_date"  required><br>
        <h4>配達を希望する時間帯</h4>
        <select name="deli_time[]" >
            <option value="all">いつでも</option>
            <option value="morning">9:00～12:00</option>
            <option value="noon">12:00～15:00</option>
            <option value="evening">15:00～18:00</option>
            <option value="night">18:00～21:00</option>
        </select>
        <h4>配達</h4>
            <input type="text" id="name" name="address" placeholder="姓" required><!--id適当-->
            <input type="text" id="name" name="address" placeholder="名" required><br>
            <input type="text" id="address" name="address" placeholder="郵便番号" required><br>
            <input type="text" id="address" name="address" placeholder="都道府県" required><br>
            <input type="text" id="address" name="address" placeholder="市区町村" required><br>
            <input type="text" id="address" name="address" placeholder="番地" required><br>
            <input type="text" id="address" name="address" placeholder="建物名、部屋番号など" ><br><!--必須項目ではない-->
        <h4>支払い</h4>
        <label>
            <input type="radio" name="payment[]" value="クレジットカード"> クレジットカード
        </label>
        <br>
        <label>
            <input type="radio" name="payment[]" value="代金引換"> 代金引換(手数料:￥330 税込み)
        </label>
        <br>
        <label>
            <input type="radio" name="payment[]" value="コンビニ"> コンビニ(手数料:￥330 税込み)
        </label>
        <br><br>
        <p>※支払いが確認された後発注されます</p>
        <button type="button" onclick="redirectToPage()">続ける</button>
    </form>
</div>
</body>
</html>