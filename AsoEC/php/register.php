<?php
$pdo = new PDO(
    'mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1554909-asoec;charset=utf8',
    'LAA1554909',
    'G1100584a'
);

$data = json_decode(file_get_contents('php://input'), true);
if (!$data || empty($data['username']) || empty($data['email']) || empty($data['password'])) {
    echo json_encode(['success' => false, 'message' => 'すべての項目を入力してください。']);
    exit;
}

$username = $data['username'];
$email = $data['email'];
$password = $data['password'];

$query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
$query->execute(['email' => $email]);
if ($query->fetch()) {
    echo json_encode(['success' => false, 'message' => 'このメールアドレスは既に使用されています。']);
    exit;
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$userId = uniqid('usr_', true);

$query = $pdo->prepare("INSERT INTO users (user_id, username, email, password) VALUES (:user_id, :username, :email, :password)");
$result = $query->execute([
    'user_id' => $userId,
    'username' => $username,
    'email' => $email,
    'password' => $hashedPassword
]);

if ($result) {
    echo json_encode(['success' => true, 'message' => '登録に成功しました。']);
} else {
    echo json_encode(['success' => false, 'message' => '登録に失敗しました。']);
}
?>
