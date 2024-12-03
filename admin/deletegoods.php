<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>商品削除</title>
<link rel="stylesheet" href="/商品管理[削除].css">
</head>
<body>
<!-- コンテナ全体 -->
<div class="container">
    <!-- メインコンテンツ（左側） -->
    <div class="main-content">
        <h1>商品削除</h1>
        <!-- 写真追加用のエリア -->
        <div class="photo-upload">写真追加</div>
        <!-- 商品情報を入力するフォーム -->
        <form>
            <label>ID入力</label>
            <input type="text" placeholder="ID入力">
            <label>名前入力</label>
            <input type="text" placeholder="名前入力">
            <label>価格入力</label>
            <input type="text" placeholder="価格入力">
            <label>初期個数の変更</label>
            <input type="number" value="100">
            <label>説明：</label>
            <textarea rows="4" placeholder="説明を入力"></textarea>
        </form>
    </div>

    <!-- サイドコンテンツ（右側） -->
    <div class="side-content">
        <!-- 管理者ID入力と説明 -->
        <p>STEP 1 確認後、管理者IDを入力</p>
        <input type="text" value="admin_ASOEC">
        <!-- 更新ボタン（左寄せ） -->
        <p>STEP2 IDを検索</p>
        <button class="update-button">検索</button><br>
        <!-- 前後の商品ボタン -->
            <textarea name="商品名" cols="40" rows="7"></textarea><br>
            <p>STEP３ 確認後、管理者IDを入力</p>
            <textarea name="ID2" rows="1"></textarea>
            <button class="delete-button">削除</button>
        <!-- ホーム画面への遷移ボタン（右下固定） -->
        <a href="ホーム画面.html" class="home-link">
            <img src="./img/普通の家のアイコン.png" width="50px" alt="ホームアイコン">
        </a>
    </div>
</div>
</body>
</html>
