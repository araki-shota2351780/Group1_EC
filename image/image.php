<?php
   $pdo = new PDO(
      'mysql:host=mysql304.phy.lolipop.lan;
       dbname=LAA1554924-php2024;
       charset=utf8;',
      'LAA1554924',
      'Pass0811'
   );
   $sql = 'SELECT image from merchandise where merc_id = "00010001"';
   $stmt = $pdo->prepare('$sql');
   $result = $stmt->execute();
   foreach($row as $result){
      $img = $result;
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
        <img src=<?= $img ?> class="topimage" alt="top" />
        <table>
            <thead>
                <tr>
                    <th>title</th>
                    <th>picture</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </fieldset>
</body>
</html>  