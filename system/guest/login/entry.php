<?php

/* :::::::::::::::::::::::::::::::::::::::::::::::::::::
このファイルでやっている事
ログイン
::::::::::::::::::::::::::::::::::::::::::::::::::::: */
header("Content-Type: text/html; charset=UTF-8"); // キャラセット
require_once('../../inc/db.php');

$statas = 0;
$code = '';
$st = '';

$getname = $_GET["name"];
$getbirth = $_GET["birth"];
$getshubetu = $_GET["shubetu"];

if($getshubetu == "staff"){
$str_sql = "SELECT * FROM staff WHERE name = '{$getname}'";// 閲覧するテーブルをidで選択
}


$result = mysql_query($str_sql,$db);// テーブル実行
$row = mysql_fetch_assoc($result);

if($getshubetu == "staff"){
$name = $row['name'];
$birth = $row['birth'];
}

// エラー文発行
if(!$getname){
	$code .= '名前を入力してください<br>';
	$statas = 0;
}elseif($getname != $name){
	$code .= 'この名前は登録されていません<br>';
	if($getbirth == ''){
			$code .= 'パスワードを入力してください<br>';
	}
	$statas = 0;
}else{
	if(!$getbirth){
		$code .= 'パスワードを入力してください<br>';
		$statas = 0;
	}elseif($getbirth != $birth){
		$code .= 'パスワードが一致しません<br>';
		$statas = 0;
	}
}


// ログイン成功
if($name == $getname and $name != "" and $getbirth == $birth and $getbirth != ""){
	$statas = 1;
	if($getshubetu == "staff"){
		$code .= 
		'<script>
		$.cookie("c_shubetsu", "'.$getshubetu.'", { expires: 7 , path:"/"});
		$.cookie("c_names", "'.$name.'" , { expires: 7 , path:"/"});
		$.cookie("c_tel", "097-532-8834", { expires: 7 , path:"/"});
		$.cookie("c_bukkenname", "", { expires: 7 , path:"/"});
		$.cookie("c_bukkenno", "", { expires: 7 , path:"/"});
		</script>';
	}
}


echo $statas;
echo ',,,';
echo $code;

?>