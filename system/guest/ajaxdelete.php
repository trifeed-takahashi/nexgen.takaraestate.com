<?php
header("Content-Type: text/html; charset=UTF-8"); // キャラセット
require_once('../inc/db.php');

$delitem = $_GET["delitem"];


$dumptable = '';
$delitems = explode("***", $delitem);
$items = '';
array_pop($delitems);
foreach ($delitems as $id) {
	
	if($id){
		$str_sql = "DELETE FROM guest WHERE id = {$id}";
		if (!(mysql_query($str_sql))) {
			exit();
			$dumptable .= '[ '.$id.' ]を削除出来ませんでした';
		}
	}
	
}

// データベース切断
mysql_close($db);




?>

