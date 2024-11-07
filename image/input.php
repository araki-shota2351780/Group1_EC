<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力画面</title>
</head>
<body>
    //「enctype="multipart/form-data"」が無いと画像をフォーム送信できない
    <form action="image.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>入力画面</legend>
            <div>
                title: <input type="text" name="title">
            </div>
            <div>
                picture: <input type="file" name="file">
            </div>
            <div>
                <button>submit</button>
            </div>
        </fieldset>
    </form>
</body>
</html>