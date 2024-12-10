<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo json_encode([
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

    $stmt = $pdo->prepare("
        SELECT c.cart_id, m.name, m.description, m.price, m.image_url, c.quantity
        FROM cart c
        JOIN merchandise m ON c.merch_id = m.merch_id
        WHERE c.user_id = ?
    ");
    $stmt->execute([$_SESSION['user_id']]);
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>
