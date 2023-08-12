<?php
require_once('../function.php');

$dbh = get_db_connect();
$errs = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $staff_name = $_POST['name'];
  $staff_pass = $_POST['pass'];
  $staff_pass1 = $_POST['pass1'];

  if(!check_words($staff_name, 15)) {
    $errs[] = 'お名前欄を修正してください';
  }

  if(!check_words($staff_pass, 32)) {
    $errs[] = 'パスワードを修正してください';
  }

  if(!($staff_pass === $staff_pass1)) {
    $errs[] = 'パスワードが一致しません';
  }
}

// 全スタッフのデータ取得
$data = select_staff($dbh);

include_once('staff_add_view.php');