<?php
session_start();

$pdo = new PDO(
    'mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1554909-asoec;charset=utf8',
    'LAA1554909',
    'G1100584a'
);

$data = json_decode(file_get_contents('php://input'), true);
if (!$data || empty($data['email']) || empty($data['password'])) {
    echo json_encode(['success' => false, 'message' => '入力が不足しています']);
    exit;
}

$email = $data['email'];
$password = $data['password'];

$query = $pdo->prepare("SELECT * FROM users WHERE email = :email AND status = 1");
$query->execute(['email' => $email]);
$user = $query->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['user_id'];
    echo json_encode(['success' => true, 'message' => 'ログイン成功']);
} else {
    echo json_encode(['success' => false, 'message' => 'ログイン情報が正しくありません']);
}
?>
