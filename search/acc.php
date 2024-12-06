<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アクセサリー商品</title>
    <link rel="stylesheet" href="./../../css/acc.css">
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
                <li><a href="./man.php">MAN</a></li>
                <li><a href="./acc.php" class="active">ACC</a></li>
            </ul>
        </nav>

        <!--DB接続-->
        <?php
            $dsn = 'mysql:host=mysql304.phy.lolipop.lan;dbname=LAA1554924-php2024;charset=utf8;';
            $username = 'LAA1554924';
            $pw = 'Pass0811';
            try{
                $pdo = new PDO($dsn,$username,$pw);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
                $stmt = $pdo->prepare("SELECT image FROM merchandise WHERE merch_id BETWEEN :start_id AND :end_id");
                $start_id;
                $end_id;
                $stmt->bindParam(':start_id', $start_id, PDO::PARAM_STR);
                $stmt->bindParam(':end_id', $end_id, PDO::PARAM_STR);
            
                //catchはプログラム末尾
        //コンテンツ部分
        echo '<main>';
            echo '<section class="','category','" id="','necklace','">';
                $s_necklace = '00090001';
                $e_necklace = '00090006';
                $stmt->execute([
                    ':start_id'=>$s_necklace,
                    ':end_id'=>$e_necklace
                ]);

                $result_necklace = $stmt->fetchAll(PDO::FETCH_COLUMN);
                
                if($result_necklace){
                    shuffle($result_necklace);

                    $imgTag = [];

                    foreach ($result_necklace as $index =>$image) {
                        $imgTag[$index] = htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ;
                    }
                
                echo '<h2>necklace</h2>';
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

            echo '<section class="','category','" id="','bracelet','">';
                $s_bracelet = '00100001';
                $e_bracelet = '00100006';
                $stmt->execute([
                    ':start_id'=>$s_bracelet,
                    ':end_id'=>$e_bracelet
                ]);

                $result_bracelet = $stmt->fetchAll(PDO::FETCH_COLUMN);
        
                if($result_bracelet){
                    shuffle($result_bracelet);

                    $imgTag = [];

                    foreach ($result_bracelet as $index =>$image) {
                        $imgTag[$index] = htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ;
                    }

                echo '<h2>bracelet</h2>';
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

            echo '<section class="','category','" id="','ring','">';
                $s_ring = '00110001';
                $e_ring = '00110006';
                $stmt->execute([
                    ':start_id'=>$s_ring,
                    ':end_id'=>$e_ring
                ]);

                $result_ring = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
                if($result_ring){
                    shuffle($result_ring);

                    $imgTag = [];

                    foreach ($result_ring as $index =>$image) {
                        $imgTag[$index] = htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ;
                    }
                echo '<h2>ring</h2>';
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

            echo '<section class="','category','" id="','perfume','">';
            $s_perfume = '00120001';
            $e_perfume = '00120006';
            $stmt->execute([
                ':start_id'=>$s_perfume,
                ':end_id'=>$e_perfume
            ]);

            $result_perfume = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
            if($result_perfume){
                shuffle($result_perfume);

                $imgTag = [];

                foreach ($result_perfume as $index =>$image) {
                    $imgTag[$index] = htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ;
                }
            echo '<h2>perfume</h2>';
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