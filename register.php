<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規アカウント作成</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body><!-- このコードは不完全です。-->
    <div class="container">
        <h2>
            <a href="#" class="login-link">LOGIN</a>
            <span class="header-text">I'M NEW HERE</span>
        </h2>
        <form method="POST" action="#">
            <div>
                <input type="text" id="last_name" name="last_name" placeholder="Last name" required>
            </div>
            <div>
                <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
            </div>
            <div>
                <input type="email" id="email" name="email" placeholder="Email address" required>
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <button type="submit">REGISTER</button>
            </div>
        </form>
    </div>
</body>
</html>

</html>

<?php
// データベース接続情報
$host = 'mysql304.phy.lolipop.lan';
$dbname = 'LAA1554924-php2024';
$username = 'LAA1554924';
$password = 'Pass0811';

try {
    // MySQLデータベースに接続
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // フォームから送信されたデータを受け取る
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $first_name . ' ' . $last_name; // first_name と last_name を結合
    $user_email = $_POST['email'];
    $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT); // パスワードをハッシュ化

    // ユーザー情報をデータベースに挿入するSQL文
    $sql = "INSERT INTO user (user_name, user_email, password) VALUES (:user_name, :user_email, :password)";
    
    $stmt = $pdo->prepare($sql);
    
    // SQL文にパラメータをバインド
    $stmt->bindParam(':user_name', $user_name);
    $stmt->bindParam(':user_email', $user_email);
    $stmt->bindParam(':password', $user_password);
    
    // SQL文を実行
    $stmt->execute();

    echo "新規アカウントが作成されました。<br>";
    echo "<a href='LOGIN.php'>ログイン画面に戻る</a>";
    
} catch (PDOException $e) {
    // エラーハンドリング
    echo "データベース接続エラー: " . $e->getMessage();
}
?>
