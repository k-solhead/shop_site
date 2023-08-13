<?php

// バリデーション　文字列の長さをチェックする
function check_words($word, $length) {
  if(mb_strlen($word) === 0) {
    return FALSE;
  } elseif (mb_strlen($word) > $length) {
    return FALSE;
  } else {
    return TRUE;
  }
}

// エスケープ処理
function html_escape($word) {
  return htmlspecialchars($word, ENT_QUOTES, 'UTF-8');
}

// データベースに接続する
function get_db_connect() {
  try{
    $dbn = 'mysql:dbname=shop;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';

    $dbh = new PDO($dbn, $user, $password);
  } catch (PDOException $e) {
    echo($e->getMessage());
    die();
  }
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $dbh;
}

//　全スタッフを取得する
function select_staff($dbh) {
  $data = [];
  $sql = "SELECT code, name FROM mst_staff";
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
  }
  return $data;
}