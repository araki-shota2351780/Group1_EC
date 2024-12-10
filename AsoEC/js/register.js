document.getElementById('register-form').addEventListener('submit', async (e) => {
    e.preventDefault();

    const username = document.getElementById('reg-username').value;
    const email = document.getElementById('reg-email').value;
    const password = document.getElementById('reg-password').value;
    const confirmPassword = document.getElementById('reg-confirm-password').value;

    if (password !== confirmPassword) {
        alert('パスワードが一致しません。');
        return;
    }

    const requestData = { username, email, password };
    console.log('送信データ:', requestData); // デバッグ用

    try {
        const response = await fetch('/AsoEC/php/register.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(requestData)
        });

        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }

        const result = await response.json();
        console.log('サーバーレスポンス:', result); // デバッグ用
        alert(result.message);
        if (result.success) {
            document.getElementById('register-modal').style.display = 'none'; // 登録成功時にモーダルを閉じる
        }
    } catch (error) {
        console.error('Error:', error);
        alert('登録中にエラーが発生しました。詳細はコンソールを確認してください。');
    }
});
