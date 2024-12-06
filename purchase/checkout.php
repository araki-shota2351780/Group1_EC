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
    <span class="close-button" onclick="location.href='cart.html'">×</span>
    <h2><em>CHECKOUT</em></h2>
    ￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣
    <script src="./js/checkout.js"></script>
    <h4>配達希望日</h4>
    <form method="post" onsubmit="redirectToPage(); return false;">
        <input type="date" id="deli_date" name="deli_date" required><br>
        <h4>配達を希望する時間帯</h4>
        <select name="deli_time[]">
            <option value="all">指定なし</option>
            <option value="morning">9:00～12:00</option>
            <option value="noon">12:00～15:00</option>
            <option value="evening">15:00～18:00</option>
            <option value="night">18:00～21:00</option>
        </select>
        <h4>配達</h4>
        <label for="name1"></label>
        <input type="text" id="name1" name="name1" placeholder="姓" required>
        <label for="name2"></label>
        <input type="text" id="name2" name="name2" placeholder="名" required><br>
        <label for="zip_code"></label>
        <input type="text" id="zip_code" name="zip_code" placeholder="郵便番号" required><br>
        <label for="prefecture"></label>
        <input type="text" id="prefecture" name="prefecture" placeholder="都道府県" required><br>
        <label for="city"></label>
        <input type="text" id="city" name="city" placeholder="市区町村" required><br>
        <label for="house_number"></label>
        <input type="text" id="house_nuber" name="house_number" placeholder="番地" required><br>
        <label for="building_name"></label>
        <input type="text" id="building_name" name="building_name" placeholder="建物名、部屋番号など"><br><!--必須項目ではない-->
        <h4>支払い</h4>
        <input type="radio"   id="payment_method" name="payment_method" value="クレジットカード">クレジットカード<br>
        <input type="radio"  id="payment_method" name="payment_method" value="代金引換">代金引換(手数料:￥330 税込み)<br>
        <input type="radio"  id="payment_method" name="payment_method" value="コンビニ">コンビニ(手数料:￥330 税込み)<br><br>
        <p>支払いが確認された後発注されます</p>
        <input type="submit" value="続ける"  >
        </form>

</div>
</body>
</html>
