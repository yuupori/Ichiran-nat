<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <div class="sign">
        <div class="container">
          <div class="panel">
            <h2>ログイン</h2>
            <form action="/login" method="post">
              <p>メールアドレス</p>
              <input type="text" name="email">
              <p>パスワード</p>
              <input type="password" name="password">
              <input type="submit" value="ログイン">
              <a href="signin.php">新規登録</a>
              <p><a href="index.php">戻る</a></p>
            </form>
          </div>
        </div>
      </div>
    
</body>
</html>