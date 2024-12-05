<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>商品登録</title>
<link rel="stylesheet" href="商品管理[登録].css">
</head>
<body>
<div class="container">
<div class="main-content">
<h1>商品登録</h1>
<div class="photo-upload">
                写真追加
</div>
<form action="entrysucces.php" method="POST">
<label for="merch_id">ID入力</label>
<input type="text" id="merch_id" name="merch_id" placeholder="ID入力">

<label for="merch_name">名前入力</label>
<input type="text" id="merch_name" name="merch_name" placeholder="名前入力">

<label for="merch_amount">価格入力</label>
<input type="text" id="merch_amount" name="merch_amount" placeholder="価格入力">

<label for="merch_quantity">初期個数の変更</label>
<input type="number" id="merch_qua" name="merch_qua" value="100">

<label for="merch_date">説明：</label>
<textarea id="merch_date" name="merch_date" rows="4" placeholder="説明を入力"></textarea>

<button type="submit" class="button">登録</button>
</form>
</div>
<div class="side-content">
<p>STEP 1 確認後、管理者IDを入力</p>
<input type="text" value="admin_ASOEC" disabled>
</div>
</div>
</body>
</html>
