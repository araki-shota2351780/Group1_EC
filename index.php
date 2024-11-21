<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム画面</title>
</head>
<style>
      body {
            margin: 0;
            padding: 0;
            background-image: url('./assets/images/home.svg'); /* 背景画像のURL */
            background-size: contain; /*画像を画面に収める */
            background-position: center; /* 中央に写真を配置 */
            background-repeat: no-repeat; /* 繰り返しを防ぐ */
            background-color: #000;/* 背景画像が足りない部分を黒にする */
            height: 100vh; /* ページ全体の高さを確保 */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* 垂直方向に配置 */
            align-items: center; /* 水平方向中央ぞろえ */
        }
        h1 {
            font-size: 6rem; /* 文字サイズを調整 */
            font-weight: bold; /* 文字を太く */
            color: #fff; /* 文字色 */
            text-align: center; /* 水平方向中央揃え */
            margin: 2vh 0 0 0; /* 上から少し余白を作る */
            position: absolute;
            top: 2vh;/* ページ上部に固定 */
        }

        .button-container {
            display: flex;
            justify-content: space-between; /* ボタンを横並びに等間隔配置 */
            width: 20%; /* ボタン全体の幅を調整 */
            margin-bottom: 5vh; /* 下部に余白を追加 */

        }

        /* 各ボタンのスタイル */
        .button {
            width: 50px;
            height: 50px;
            background-color: #ccc; /* 背景色 */
            border: none;
            border-radius: 50%; /* 丸いボタンにする */
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* 影を追加 */
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s; /* ホバー時のアニメーション */
        }

        /* 真ん中のボタン */
        .button.middle {
            width: 70px;
            height: 70px; /* 他より大きい */
            background-color: #007BFF; /* 真ん中のボタンの色 */
        }

        /* ホバー時の効果 */
        .button:hover {
            transform: scale(1.1); /* ボタンを少し大きくする */
            background-color: #555; /* 色を変更 */
        }

        /* スマホ用のレスポンシブデザイン */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem; /* スマホ向けに文字サイズを小さめに調整 */
                margin: 5vh 0 0 0; /* 上方向の余白を縮める */
            }
        }
</style>
<body>

    <h1>ASOU</h1>
<br>
<br>


<div class="button-container">
        <button class="button left">
            <img src="./assets/images/cart.svg" alt="Left Button">
        </button>
        <button class="button middle">
            <img src="./assets/images/megane.svg" alt="Middle Button">
        </button>
        <button class="button right">
            <img src="./assets/images/human.svg" alt="Right Button">
        </button>
    </div>

<!-- <button>
    <img src="assets/images/cart.svg" alt="Button Icon" width="20" height="20">
</button> -->


    
</body>
</html>

