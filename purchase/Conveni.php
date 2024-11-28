<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>コンビニ払い画面</title>
<link rel="stylesheet" href="./css/checkout.css">
<link rel="stylesheet" href="./css/conveni.css">
</head>
<body>
<div class="container">
    <!-- × ボタンはコンテナ内に配置 -->
    <span class="close-button" onclick="location.href='cart.html'">×</span>
    <h2><em>CHECKOUT</em></h2>
    ￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣
        </script>
    <h4>コンビニ画面</h4>
    <form action="" method="post">
    <ul class="convenience-list">
        <li class="convenience-item">
            <input type="radio" name="conveni[]" value="ファミマ" id="familymart">
            <label for="familymart">
                <img src="./../image/ファミリーマート.png"  height=20rem>
                ファミリーマート
            </label>
        </li>
        <li class="convenience-item">
            <input type="radio" name="conveni[]" value="ローソン" id="lawson">
            <label for="lawson">
                <img src="./../image/ローソン.png"  height=20rem>
                ローソン
            </label>
        </li>
        <li class="convenience-item">
            <input type="radio" name="conveni[]" value="デイリーヤマザキ" id="dailyyamazaki">
            <label for="dailyyamazaki">
                <img src="./../image/デイリーヤマザキ.png"  height=20rem>
                デイリーヤマザキ
            </label>
        </li>
        <li class="convenience-item">
            <input type="radio" name="conveni[]" value="ミニストップ" id="ministop">
            <label for="ministop">
                <img src="./../image/ミニストップ.png"  height=20rem>
                ミニストップ
            </label>
        </li>
        <li class="convenience-item">
            <input type="radio" name="conveni[]" value="セブンイレブン">
            <label for="seveneleven">
                <img src="./../image/セブンイレブン.png"  height=20rem>
                セブンイレブン
            </label>
        </li>
    <h5>注文を確定されてから24時間以内お支払いがされなかった場合自動的に注文はキャンセルされます</h5>

        <h4>受け取り方法</h4>
        <input type="radio" name="receive[]" value="置き">置き配（配達BOX）<br>
        <input type="radio" name="receive[]" value="対面">対面で受け取り<br>
        <button type="button">最終確認へ進む</button>
    </form>
</div>
</body>
</html>
