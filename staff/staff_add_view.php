<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ろくまる農園</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<?php if(count($errs)) {
  echo '<div class="alert">';
  foreach($errs as $err) {
    echo '<p>'.$err.'</p>';
  }
} else {
  echo '<div></div>';
}
?>
  </div>
  <section class="section">
    <div class="section_inner">
      <h1>スタッフ一覧</h1>
      <table border="1">
        <tr><th>番号</th><th>名前</th></tr>
        <?php foreach($data as $row): ?>
        <tr>
          <td><?php echo $row['code']; ?></td>
          <td><?php echo html_escape($row['name']); ?></td>
        </tr>
        <?php endforeach; ?>
      </table>

      <h1>スタッフ追加</h1>
      <form action="" method="post">
        
        <p>スタッフ名を入力してください(15文字まで)</p>
        <p><input type="text" name="name"></p>
        <p>パスワードを入力してください(32文字まで)</p>
        <p><input type="password" name="pass"></p>
        <p>パスワードをもう１度入力してください</p>
        <p><input type="password" name="pass1"></p>
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="OK">
      </form>
    </div>
  </section>
</body>
</html>