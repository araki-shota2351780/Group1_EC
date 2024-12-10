document.getElementById('login-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    const response = await fetch('php/login.php', { // PHPファイルへのパスを修正
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ email, password })
    });
    const result = await response.json();
    alert(result.message);
    if (result.success) {
        window.location.href = 'mypage.html'; // マイページへのリダイレクト
    }
});

document.getElementById('guest-login').addEventListener('click', async () => {
    const response = await fetch('php/guest_login.php', { method: 'POST' }); // PHPファイルへのパスを修正
    const result = await response.json();
    if (result.success) {
        window.location.href = 'mypage.html'; // マイページへのリダイレクト
    } else {
        alert(result.message);
    }
});
