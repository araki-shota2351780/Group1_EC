<?php
session_start();

// 管理者のユーザー名とパスワード（仮設定）
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'password123');

// ログイン処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
        $_SESSION['loggedin'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "ユーザー名またはパスワードが間違っています。";
    }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ログイン</title>
    <link rel="stylesheet" href="../css/admin_login.css">
</head>
<body>
    <div class="login-container">
        <h2>管理者ログイン</h2>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form id="loginForm" method="post" onsubmit="return validateForm()">
            <label for="username">ユーザー名</label>
            <input type="text" id="username" name="username">
            
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password">
            
            <button type="submit">ログイン</button>
        </form>
    </div>

    <script>
        // JavaScriptによるフォームのバリデーション
        function validateForm() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            if (!username || !password) {
                alert("ユーザー名とパスワードを入力してください。");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
