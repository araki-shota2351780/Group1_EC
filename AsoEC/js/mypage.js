document.addEventListener('DOMContentLoaded', async () => {
    try {
        const response = await fetch('/AsoEC/php/mypage.php'); // PHPファイルへのパス
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const user = await response.json();

        if (user.success) {
            // ユーザー情報を表示
            document.getElementById('username').textContent = user.data.username;
            document.getElementById('email').textContent = user.data.email;
            document.getElementById('created-at').textContent = user.data.created_at;

            // ゲストの場合、新規登録リンクを表示
            if (user.data.username === 'ゲスト') {
                document.getElementById('guest-register-link').style.display = 'block';
            }
        } else {
            // ログインが必要な場合はログイン画面へリダイレクト
            alert(user.message);
            window.location.href = 'login.html'; // ログインページへのリダイレクト
        }
    } catch (error) {
        console.error('Error:', error);
        alert('サーバーエラーが発生しました。');
        window.location.href = 'login.html';
    }
});

document.getElementById('logout').addEventListener('click', async () => {
    try {
        // ログアウト処理
        const response = await fetch('/AsoEC/php/logout.php', { method: 'POST' });
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const result = await response.json();
        if (result.success) {
            alert(result.message); // ログアウト成功メッセージ
            window.location.href = 'login.html'; // ログインページへのリダイレクト
        } else {
            alert('ログアウトに失敗しました。');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('サーバーエラーが発生しました。');
    }
});
