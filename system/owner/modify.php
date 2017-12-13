<?php
	header("Content-Type: text/html; charset=UTF-8"); // キャラセット
	// ログインしてクッキーが設定されていればコンテンツを見れる
	if($_COOKIE['c_shubetsu'] ){
	$title = "オーナー管理";
	require_once "../inc/db.php";

$id = $_GET["id"];

$row = mysql_fetch_assoc(mysql_query("select * from owner WHERE bukkenid = $id",$db));

$bukken = $row['bukken'];
$bukkenyomi = $row['bukkenyomi'];
$bukkenaddress = $row['bukkenaddress'];
$bukkengmap = $row['bukkengmap'];
$ownername = $row['ownername'];
$owneryomi = $row['owneryomi'];
$ownertel = $row['ownertel'];
$ownerbirth = $row['ownerbirth'];
$ownerchui = $row['ownerchui'];
$kessaitanto = $row['kessaitanto'];
$ownergyousya = $row['ownergyousya'];
$trash = $row['trash'];



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
<link rel="stylesheet" type="text/css" href="owner.css?121113" media="screen,tv" />
</head>

<body class="owner reception modify">
<?php require_once "../inc/header.php"; ?>
<form action="modify_into.php" method="post">
<input type="hidden" name="bukkenid" class="bukkenid" value="<? echo $id; ?>">

<p class="backpage"><a href="/system/owner/">一覧へ戻る</a></p>

<div class="uestion_container_all">


<div class="uestion_container clearfix">
<div class="uestion_title">物件</div>
<div class="uestion_contents"><input type="text" name="bukken" class="bukken" value="<?php echo $bukken;?>" placeholder="タカラアパート">
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">物件よみ</div>
<div class="uestion_contents"><input type="text" name="bukkenyomi" class="bukkenyomi" value="<?php echo $bukkenyomi;?>" placeholder="たからあぱーと">
</div>
</div>





<div class="uestion_container clearfix">
<div class="uestion_title">物件住所</div>
<div class="uestion_contents"><input type="text" name="bukkenaddress" class="bukkenaddress" value="<?php echo $bukkenaddress;?>" placeholder="大分市大手町一丁目一番三号">
</div>
</div>




<div class="uestion_container clearfix">
<div class="uestion_title">物件マップリンク</div>
<div class="uestion_contents"><input type="text" name="bukkengmap" class="bukkengmap" value="<?php echo $bukkengmap;?>">
</div>
</div>





<div class="uestion_container clearfix">
<div class="uestion_title">オーナー名</div>
<div class="uestion_contents"><input type="text" name="ownername" class="ownername" value="<?php echo $ownername;?>">
</div>
</div>





<div class="uestion_container clearfix">
<div class="uestion_title">よみ</div>
<div class="uestion_contents"><input type="text" name="owneryomi" class="owneryomi" value="<?php echo $owneryomi;?>">
</div>
</div>





<div class="uestion_container clearfix">
<div class="uestion_title">電話番号</div>
<div class="uestion_contents"><input type="text" name="ownertel" class="ownertel" value="<?php echo $ownertel;?>">
</div>
</div>





<div class="uestion_container clearfix">
<div class="uestion_title">パスワード</div>
<div class="uestion_contents"><input type="text" name="ownerbirth" class="ownerbirth" value="<?php echo $ownerbirth;?>">
</div>
</div>






<div class="uestion_container clearfix">
<div class="uestion_title">オーナー注意点</div>
<div class="uestion_contents">
<textarea name="ownerchui" class="ownerchui checkitem"><?php echo $ownerchui;?></textarea>
</div>
</div>





<div class="uestion_container clearfix">
<div class="uestion_title">担当</div>
<div class="uestion_contents"><input type="text" name="kessaitanto" class="kessaitanto" value="<?php echo $kessaitanto;?>">
</div>
</div>





<div class="uestion_container clearfix">
<div class="uestion_title">指定業者</div>
<div class="uestion_contents">
<select name="ownergyousya" class="ownergyousya" id="ownergyousya">
<option value="0">指定なし</option>
<?php
$rs2 = mysql_query("select * from gyousya ORDER BY gyousyayomi ASC",$db);// テーブル実行
while($arr_item2 = mysql_fetch_assoc($rs2)){
$dump .= '<option value="'.$arr_item2[gyousyaid].'"';
if($ownergyousya == $arr_item2[gyousyaid]) $dump .= ' selected="selected"';
$dump .= '>'.$arr_item2[gyousyaname].'</option>';
echo $dump;
}

?>
</select>
</div>
</div>






</div><!-- uestion_container_all -->




<div class="reception_submit_button">
<input type="submit" value="修 正"></div>


</form>













</body>
</html>









<?php
// クッキー情報が切れたらログアウトする
}else{
echo '<meta http-equiv="refresh" content="0;URL=./login/login.php">';
}

?>