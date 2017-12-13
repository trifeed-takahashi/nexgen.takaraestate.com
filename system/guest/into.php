<?php
	header("Content-Type: text/html; charset=UTF-8"); // キャラセット

	
	$title = "登録完了";
	require_once "../inc/db.php";



$id= strip_tags($_POST['id']);
$f_date=strip_tags($_POST['f_date']);
$f_tanto=strip_tags($_POST['f_tanto']);
$f_name=strip_tags($_POST['f_name']);
$f_yomi=strip_tags($_POST['f_yomi']);
$f_tel=strip_tags($_POST['f_tel']);
$f_mail=strip_tags($_POST['f_mail']);
$f_gyousyu=strip_tags($_POST['f_gyousyu']);
$f_meigi=strip_tags($_POST['f_meigi']);
$f_kubun=strip_tags($_POST['f_kubun']);
$f_kubun_biko=strip_tags($_POST['f_kubun_biko']);
$f_trigger=strip_tags($_POST['f_trigger']);
$f_trigger_biko=strip_tags($_POST['f_trigger_biko']);
$f_jiki=strip_tags($_POST['f_jiki']);
if (isset($_POST['f_visit']) && is_array($_POST['f_visit'])) {
    $f_visit = implode(",", $_POST['f_visit']);
}
$f_visit_biko=strip_tags($_POST['f_visit_biko']);
$f_rent=strip_tags($_POST['f_rent']);
$f_p1=strip_tags($_POST['f_p1']);
$f_p2=strip_tags($_POST['f_p2']);
$f_cost=strip_tags($_POST['f_cost']);
if (isset($_POST['f_madori']) && is_array($_POST['f_madori'])) {
    $f_madori = implode(",", $_POST['f_madori']);
}
$f_pet1=strip_tags($_POST['f_pet1']);
$f_pet2=strip_tags($_POST['f_pet2']);
$f_pet_biko=strip_tags($_POST['f_pet_biko']);

$f_people=strip_tags($_POST['f_people']);
$f_age=strip_tags($_POST['f_age']);
$f_startliving_year=strip_tags($_POST['f_startliving_year']);
$f_startliving_month=strip_tags($_POST['f_startliving_month']);
$f_startliving_day=strip_tags($_POST['f_startliving_day']);
$f_startliving=strip_tags($_POST['f_startliving']);
$f_startliving_biko=strip_tags($_POST['f_startliving_biko']);
$f_area=strip_tags($_POST['f_area']);
if (isset($_POST['f_required']) && is_array($_POST['f_required'])) {
    $f_required = implode(",", $_POST['f_required']);
}
$f_required_biko=strip_tags($_POST['f_required_biko']);
$f_rank1=strip_tags($_POST['f_rank1']);
$f_rank2=strip_tags($_POST['f_rank2']);
$f_rank3=strip_tags($_POST['f_rank3']);
$f_rank4=strip_tags($_POST['f_rank4']);
$f_property = addslashes($_REQUEST['f_property']);
$f_property = nl2br($f_property);
if(!$f_property) $f_property = '';
$f_request = addslashes($_REQUEST['f_request']);
$f_request = nl2br($f_request);
if(!$f_request) $f_request = '';

// かぶるIDがないかチェック

$id_flag = false;
$row = mysql_fetch_assoc(mysql_query("select * from guest WHERE id = $id",$db));

if($row['id'] == $id){
	$id_flag = false;
}else{
	$id_flag = true;
}


// 新規登録
if($id and $id_flag){ // 同じIDがなければ登録
	$result = mysql_query("INSERT INTO guest(id,f_date,f_tanto,f_name,f_yomi,f_tel,f_mail,f_gyousyu,f_meigi,f_kubun,f_kubun_biko,f_trigger,f_trigger_biko,f_jiki,f_visit,f_visit_biko,f_rent,f_p1,f_p2,f_cost,f_madori,f_pet1,f_pet2,f_pet_biko,f_people,f_age,f_startliving_year,f_startliving_month,f_startliving_day,f_startliving,f_startliving_biko,f_area,f_required,f_required_biko,f_rank1,f_rank2,f_rank3,f_rank4,f_property,f_request) VALUES('$id','$f_date','$f_tanto','$f_name','$f_yomi','$f_tel','$f_mail','$f_gyousyu','$f_meigi','$f_kubun','$f_kubun_biko','$f_trigger','$f_trigger_biko','$f_jiki','$f_visit','$f_visit_biko','$f_rent','$f_p1','$f_p2','$f_cost','$f_madori','$f_pet1','$f_pet2','$f_pet_biko','$f_people','$f_age','$f_startliving_year','$f_startliving_month','$f_startliving_day','$f_startliving','$f_startliving_biko','$f_area','$f_required','$f_required_biko','$f_rank1','$f_rank2','$f_rank3','$f_rank4','$f_property','$f_request')", $db);
	
	if (!$result) { $h1_text = 'データを登録できませんでした。'; }
	else{$h1_text = '登録完了しました';}
	
	// データベースを閉じる
	$db = mysql_close($db);
	if (!$db) { $h1_text = 'データベースとの接続を閉じられませんでした。'; }
}else{
	$h1_text = 'IDが重複している為登録をキャンセルしました';
}






?>




<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

<title><?php echo $title; ?></title>
<META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW,NOARCHIVE">

<!-- [ =============== page structure =============== ] -->

<?php require_once "../inc/structure.php"; ?>

<!-- [ =============== import =============== ] -->

<script type="text/javascript" src="/chintai/common/js/libs.js"></script>
<script type="text/javascript" src="/chintai/common/js/widget.js"></script>
<script type="text/javascript" src="/system/common/js/widget.js?1"></script>

<link rel="stylesheet" type="text/css" href="/system/common/css/import.css?1259843" media="screen,tv" />
<link rel="stylesheet" type="text/css" href="guest.css?12113" media="screen,tv" />
</head>

<body class="reception complete">

<h1><? echo $h1_text; ?></h1>







</body>
</html>








