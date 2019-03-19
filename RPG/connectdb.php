<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "rpg_account";


$conn = @mysqli_connect($host, $username, $password, $db);
if (mysqli_connect_errno($conn))
  die("無法連線資料庫伺服器");

//設定連線的字元集為 UTF8 編碼
mysqli_set_charset($conn, "utf8");
?>