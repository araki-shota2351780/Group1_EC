<?php
// DB接続
$dbn = 'mysql:dbname=LAA1554924-php2024;charset=utf8mb4;port=5501;host=localhost';
$user = 'root';
$pwd = '';

try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}

// SQL作成
$sql = 'SELECT * FROM merchandise';

$stmt = $pdo->prepare($sql);

// SQL実行
try {
    $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

//1.バイナリデータを取り出す!!!
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$output = "";
foreach ($result as $record) {

    //2.取得した画像バイナリデータをbase64で変換!!!
    $img = "data:image/jpeg;base64," . base64_encode($record["picture"]);
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一覧画面</title>
</head>
<body>
    <fieldset>
        <legend>一覧画面</legend>
        <a href="input.php">入力画面</a>

        <!-- 3.imgタグに入れる!!! -->
        <img src=<?= $img ?> class="topimage" alt="top" />
        <table>
            <thead>
                <tr>
                    <th>title</th>
                    <th>picture</th>
                </tr>
            </thead>
            <tbody>
                <?= $output ?>
            </tbody>
        </table>
    </fieldset>
    <script>
        const pictures = <?= json_encode($result) ?>;
        console.log(pictures);
    </script>
</body>
</html>  