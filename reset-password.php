<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>パスワード変更メール送信</title>
<link rel="stylesheet" href="./css/checkout.css">
</head>
<body>
<div class="container">
    <!-- × ボタンはコンテナ内に配置 -->
    <span class="close-button" onclick="location.href='login.php'">×</span>
    <h2><em>LOGIN</em></h2>
    ￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣
    <h4>パスワードを回復する</h4>
   
    
    <p>リセット方法をメールでお知らせします。</p>
    <form action="reset-password.php" method="post">
        <input type="email" id="user_email" name="email" placeholder="Email address" required><br><br>
        <input type="submit" value="続ける">
    </form>
</div>
</body>
</html>
<?php
// データベース接続情報
$dsn = 'mysql:host=mysql304.phy.lolipop.lan;dbname=LAA1554924-php2024;charset=utf8';
$username = 'LAA1554924';
$password = 'Pass0811';

// 入力されたメールアドレスを取得
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_email = $_POST['email'];

    // メールアドレスが空でないかチェック
    if (empty($user_email)) {
        echo "メールアドレスを入力してください。";
        exit;
    }

    try {
        // PDOでデータベースに接続
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // メールアドレスがデータベースに存在するか確認するSQLクエリ
        $sql = "SELECT email FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $user_email, PDO::PARAM_STR);
        $stmt->execute();

        // 結果を取得
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // メールアドレスが見つかった場合、パスワードリセット用のメールを送信
            // ここではサンプルとしてechoしていますが、実際にはメール送信処理を追加してください
            $to = $user['email'];
            $subject = 'パスワードリセットのご案内';
            $message = 'パスワードリセット用のリンクをクリックしてください。';
            $headers = 'From: no-reply@example.com';

            // メール送信 (メール送信機能が有効なサーバーであれば、このコードでメールを送信できます)
            if (mail($to, $subject, $message, $headers)) {
                echo "パスワードリセットの案内メールを送信しました。";
            } else {
                echo "メール送信に失敗しました。再試行してください。";
            }

        } else {
            // メールアドレスが見つからなかった場合
            echo "登録されているメールアドレスではありません。";
        }

    } catch (PDOException $e) {
        echo "データベース接続失敗: " . $e->getMessage();
    }
}
?>
