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

// データベースに接続する
function get_db_connnect() {
  try{
    $dbn = 'mysql:dbname=mst_staff;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';

    $dbh = new PDO($dbn, $user, $password);
  } catch (PDOException $e) {
    echo($e->getMessage());
    die();
  }
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $dbh
}