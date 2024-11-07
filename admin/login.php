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
    <style>
        /* CSSスタイル */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }
        .login-container {
            width: 300px;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            margin-top: 1em;
            color: #666;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 0.5em;
            margin-top: 0.5em;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 0.7em;
            border: none;
            background-color: #333;
            color: #fff;
            font-weight: bold;
            border-radius: 4px;
            margin-top: 1em;
            cursor: pointer;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 1em;
        }
    </style>
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
