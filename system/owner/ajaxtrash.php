<?php
header("Content-Type: text/html; charset=UTF-8"); // キャラセット
require_once('../inc/db.php');

$id = $_GET["id"];

$result = mysql_query("UPDATE owner SET trash='2' WHERE bukkenid='$id';", $db);
if (!$result) { $dump = 'データを登録できませんでした。'; }
else{$dump = 'ゴミ箱へ移動しました';}
// データベースを閉じる
$db = mysql_close($db);
if (!$db) { $dump = 'データベースとの接続を閉じられませんでした。'; }


echo $dump;



?>

