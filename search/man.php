<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>男性向け商品</title>
    <link rel="stylesheet" href="./../../css/man.css">
</head>
<body>
    <div class="container">
        <!-- ヘッダー部分 -->
        <header>
            <button onclick="history.back()">←</button> <!-- 戻るボタン -->
            <input type="text" placeholder="検索" class="search-box"> <!-- 検索ボックス -->
            <button class="cart-button">🛒</button> <!-- カートボタン -->
        </header>

        <!-- ナビゲーションタブ -->
        <nav>
            <ul>
                <li><a href="./woman.php">WOMAN</a></li>
                <li><a href="./man.php" class="active">MAN</a></li>
                <li><a href="./acc.php">ACC</a></li>
            </ul>
        </nav>

        <!--DB接続-->
        <?php
            try{
                $pdo = new PDO(
                      'mysql:host=mysql304.phy.lolipop.lan;
                       dbname=LAA1554924-php2024;
                       charset=utf8;',
                      'LAA1554924',
                      'Pass0811'
                );
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
                $stmt = $pdo->prepare("SELECT image FROM merchandise WHERE merch_id BETWEEN :start_id AND :end_id");
                $start_id;
                $end_id;
                $stmt->bindParam(':start_id', $start_id, PDO::PARAM_STR);
                $stmt->bindParam(':end_id', $end_id, PDO::PARAM_STR);

        //コンテンツ部分
        echo '<main>';
            echo '<section class="','category','" id="','tops','">';
                $s_tops = '00040001';
                $e_tops = '00040006';
                $stmt->execute([
                    ':start_id'=>$s_tops,
                    ':end_id'=>$e_tops
                ]);

                $result_tops = $stmt->fetchAll(PDO::FETCH_COLUMN);
                
                if($result_tops){
                    shuffle($result_tops);

                    $imgTag = [];

                    foreach ($result_tops as $index =>$image) {
                        $imgTag[$index] = htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ;
                    }
                
                echo '<h2>tops</h2>';
                echo '<div class="','items','">';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[0],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[1],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[2],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[3],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[4],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                echo '</div>';
            echo '</section>';
            }else{
                echo 'データが見つかりませんでした';
            }

            echo '<section class="','category','" id="','pants','">';
                $s_pants = '00020001';
                $e_pants = '00020006';
                $stmt->execute([
                    ':start_id'=>$s_pants,
                    ':end_id'=>$e_pants
                ]);

                $result_pants = $stmt->fetchAll(PDO::FETCH_COLUMN);
            
                if($result_pants){
                    shuffle($result_pants);

                    $imgTag = [];

                    foreach ($result_pants as $index =>$image) {
                        $imgTag[$index] = htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ;
                    }

                echo '<h2>pants</h2>';
                echo '<div class="','items','">';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[0],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[1],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[2],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[3],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[4],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                echo '</div>';
            echo '</section>';
            }else{
                echo 'データが見つかりませんでした';
            }

            echo '<section class="','category','" id="','shoes','">';
                $s_shoes = '00030001';
                $e_shoes = '00030006';
                $stmt->execute([
                    ':start_id'=>$s_shoes,
                    ':end_id'=>$e_shoes
                ]);

                $result_shoes = $stmt->fetchAll(PDO::FETCH_COLUMN);
            
                if($result_shoes){
                    shuffle($result_shoes);

                    $imgTag = [];

                    foreach ($result_shoes as $index =>$image) {
                        $imgTag[$index] = htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ;
                    }
                echo '<h2>shoes</h2>';
                echo '<div class="','items','">';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[0],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[1],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[2],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[3],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[4],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                echo '</div>';
            echo '</section>';
                }else{
                    echo 'データが見つかりませんでした';
                }

                echo '<section class="','category','" id="','bag','">';
                $s_bag = '00010001';
                $e_bag = '00010006';
                $stmt->execute([
                    ':start_id'=>$s_bag,
                    ':end_id'=>$e_bag
                ]);

                $result_bag = $stmt->fetchAll(PDO::FETCH_COLUMN);
        
                if($result_bag){
                    shuffle($result_bag);

                    $imgTag = [];

                    foreach ($result_bag as $index =>$image) {
                        $imgTag[$index] = htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ;
                    }
                echo '<h2>bag</h2>';
                echo '<div class="','items','">';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[0],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[1],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[2],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[3],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                    echo '<div class="','item','">';
                        echo '<img src="',$imgTag[4],'" alt="商品画像">';
                        echo '<p>商品名</p>';
                        echo '<p>¥ 価格</p>';
                    echo '</div>';
                echo '</div>';
            echo '</section>';
                }else{
                    echo 'データが見つかりませんでした';
                }
        echo '</main>';
    echo '</div>';
echo '</body>';
echo '</html>';
        }catch(PDOException $e){
            echo 'データベース接続エラー：'.$e->getMessage();
        }
?>