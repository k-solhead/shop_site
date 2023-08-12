<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ろくまる農園</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <section class="section">
    <div class="section_inner">
      <h1>スタッフ追加</h1>
      <form action="staff_add_check.php" method="post">
        
        <p>スタッフ名を入力してください</p>
        <p><input type="text" name="name"></p>
        <p>パスワードを入力してください</p>
        <p><input type="password" name="password"></p>
        <p>パスワードをもう１度入力してください</p>
        <p><input type="password" name="password1"></p>
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="OK">
      </form>
    </div>
  </section>
</body>
</html>