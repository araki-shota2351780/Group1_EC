<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo json_encode([
        "success" => false,
        "error" => "ログインが必要です。",
    ]);
    exit;
}

try {
    $pdo = new PDO(
        'mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1554909-asoec;charset=utf8',
        'LAA1554909',
        'G1100584a'
    );

    $data = json_decode(file_get_contents('php://input'), true);

    if (!isset($data['cart_id'])) {
        throw new Exception("カートIDが指定されていません。");
    }

    $stmt = $pdo->prepare("DELETE FROM cart WHERE cart_id = ? AND user_id = ?");
    $stmt->execute([$data['cart_id'], $_SESSION['user_id']]);

    echo json_encode(["success" => true]);
} catch (Exception $e) {
    echo json_encode(["success" => false, "error" => $e->getMessage()]);
}
?>
