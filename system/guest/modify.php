<?php
	header("Content-Type: text/html; charset=UTF-8"); // キャラセット
	// ログインしてクッキーが設定されていればコンテンツを見れる
	if($_COOKIE['c_shubetsu'] ){
	$title = "顧客管理";
	require_once "../inc/db.php";

$id = $_GET["id"];

$row = mysql_fetch_assoc(mysql_query("select * from guest WHERE id = $id",$db));

$id = $row['id'];
$f_date = $row['f_date'];
$f_tanto = $row['f_tanto'];
$f_rank = $row['f_rank'];
$f_name = $row['f_name'];
$f_yomi = $row['f_yomi'];
$f_tel = $row['f_tel'];
$f_mail = $row['f_mail'];
$f_gyousyu = $row['f_gyousyu'];
$f_meigi = $row['f_meigi'];
$f_kubun = $row['f_kubun'];
$f_kubun_biko = $row['f_kubun_biko'];
$f_trigger = $row['f_trigger'];
$f_trigger_biko = $row['f_trigger_biko'];
$f_jiki = $row['f_jiki'];
$f_visit = $row['f_visit'];
$f_visit_biko = $row['f_visit_biko'];
$f_rent = $row['f_rent'];
$f_p1 = $row['f_p1'];
$f_p2 = $row['f_p2'];
$f_cost = $row['f_cost'];
$f_madori = $row['f_madori'];
$f_pet1 = $row['f_pet1'];
$f_pet2 = $row['f_pet2'];
$f_pet_biko = $row['f_pet_biko'];
$f_people = $row['f_people'];
$f_age = $row['f_age'];
$f_startliving_year = $row['f_startliving_year'];
$f_startliving_month = $row['f_startliving_month'];
$f_startliving_day = $row['f_startliving_day'];
$f_startliving = $row['f_startliving'];
$f_startliving_biko = $row['f_startliving_biko'];
$f_area = $row['f_area'];
$f_required = $row['f_required'];
$f_required_biko = $row['f_required_biko'];
$f_rank1 = $row['f_rank1'];
$f_rank2 = $row['f_rank2'];
$f_rank3 = $row['f_rank3'];
$f_rank4 = $row['f_rank4'];
$f_property = $row['f_property'];
$f_property = str_replace('<br />' , '' , $f_property);
$f_request = $row['f_request'];
$f_request = str_replace('<br />' , '' , $f_request);


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
<link rel="stylesheet" type="text/css" href="guest.css?121113" media="screen,tv" />
</head>

<body class="guest reception modify">
<?php require_once "../inc/header.php"; ?>
<form action="modify_into.php" method="post">
<input type="hidden" name="id" class="id" value="<? echo $id; ?>">

<p class="backpage"><a href="/system/guest/">一覧へ戻る</a></p>

<div class="uestion_container_all">

<div class="uestion_container date_container clearfix">
<div class="uestion_title">ご来店日</div>
<div class="uestion_contents"><input type="text" name="f_date" class="f_date" value="
<?php
if($f_date){
echo $f_date;
}else{
echo date('Y-m-d');
}
?>
">
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">担当<span class="required_item">※スタッフ記入</span></div>
<div class="uestion_contents">
<select class="f_tanto" name="f_tanto">
    <option value="" selected>選択</option>
    <option value="加藤文哉"<?php if($f_tanto == "加藤文哉"){ echo ' selected="selected"'; };?>>加藤文哉</option>
    <option value="西村考司"<?php if($f_tanto == "西村考司"){ echo ' selected="selected"'; };?>>西村考司</option>
    <option value="矢野宏一"<?php if($f_tanto == "矢野宏一"){ echo ' selected="selected"'; };?>>矢野宏一</option>
    <option value="矢野広彰"<?php if($f_tanto == "矢野広彰"){ echo ' selected="selected"'; };?>>矢野広彰</option>
    <option value="幸野愛"<?php if($f_tanto == "幸野愛"){ echo ' selected="selected"'; };?>>幸野愛</option>
    <option value="冨高綾"<?php if($f_tanto == "冨高綾"){ echo ' selected="selected"'; };?>>冨高綾</option>
</select>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">ランク<?php echo $f_ranku; ?></div>
<div class="uestion_contents">
<?php
	if($f_rank == ""){
		if(strpos($f_visit,"6") !== false){ $f_rank = 3; }
	}
?>
<select class="f_ranku" name="f_ranku">
    <option value="">選択</option>
    <option value="1"<?php if($f_rank == 1){ echo ' selected="selected"'; };?>>クレーマー</option>
    <option value="2"<?php if($f_rank == 2){ echo ' selected="selected"'; };?>>ゾンビ</option>
    <option value="3"<?php if($f_rank == 3){ echo ' selected="selected"'; };?>>紹介</option>
    <option value="4"<?php if($f_rank == 4){ echo ' selected="selected"'; };?>>リピーター</option>
</select>
</div>
</div>



<div class="uestion_container clearfix">
<div class="uestion_title">お名前<span class="required_item">※必須</span></div>
<div class="uestion_contents"><input type="text" name="f_name" class="f_name" value="<?php echo $f_name;?>" placeholder="宝　太郎"<?php if(strpos($error_point,"f_name") !== false){ echo 'style="background-color:#ffeeee"'; }; ?>>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">よみ<span class="required_item">※必須</span></div>
<div class="uestion_contents"><input type="text" name="f_yomi" class="f_yomi" value="<?php echo $f_yomi;?>" placeholder="たから　たろう"<?php if(strpos($error_point,"f_yomi") !== false){ echo 'style="background-color:#ffeeee"'; }; ?>>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">電話番号<span class="required_item">※必須</span></div>
<div class="uestion_contents"><input type="text" name="f_tel" class="f_tel" value="<?php echo $f_tel;?>" placeholder="000-0000-0000"<?php if(strpos($error_point,"f_tel") !== false){ echo 'style="background-color:#ffeeee"'; }; ?>></div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">メールアドレス<span class="required_item">※必須</span></div>
<div class="uestion_contents"><input type="text" name="f_mail" class="f_mail" value="<?php echo $f_mail;?>" placeholder="chintai@takaraestate.com"<?php if(strpos($error_point,"f_mail") !== false){ echo 'style="background-color:#ffeeee"'; }; ?>></div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">職業・職種</div>
<div class="uestion_contents"><input type="text" name="f_gyousyu" class="f_gyousyu" value="<?php echo $f_gyousyu;?>" placeholder="飲食業"></div>
</div>



<div class="uestion_container clearfix">
<div class="uestion_title">契約名義</div>
<div class="uestion_contents">
	<ul class="section_info_ul clearfix">
<li><label><input type="radio" name="f_meigi" class="f_meigi checkitem" value="1" <?php if($f_meigi == 1){ echo ' checked="checked"'; };?>><span class="checkitem_parts">本人契約</span></label></li>
<li><label><input type="radio" name="f_meigi" class="f_meigi checkitem" value="2" <?php if($f_meigi == 2){ echo ' checked="checked"'; };?>><span class="checkitem_parts">親契約</span></label></li>
<li><label><input type="radio" name="f_meigi" class="f_meigi checkitem" value="3" <?php if($f_meigi == 3){ echo ' checked="checked"'; };?>><span class="checkitem_parts">会社契約</span></label></li>
	</ul>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">勤務区分</div>
<div class="uestion_contents">
	<ul class="section_info_ul clearfix">
<li><label><input type="radio" name="f_kubun" class="f_kubun checkitem" value="1" <?php if($f_kubun == 1){ echo ' checked="checked"'; };?>><span class="checkitem_parts">学生</span></label></li>
<li><label><input type="radio" name="f_kubun" class="f_kubun checkitem" value="2" <?php if($f_kubun == 2){ echo ' checked="checked"'; };?>><span class="checkitem_parts">アルバイト</span></label></li>
<li><label><input type="radio" name="f_kubun" class="f_kubun checkitem" value="3" <?php if($f_kubun == 3){ echo ' checked="checked"'; };?>><span class="checkitem_parts">正社員</span></label></li>
<li><label><input type="radio" name="f_kubun" class="f_kubun checkitem" value="4" <?php if($f_kubun == 4){ echo ' checked="checked"'; };?>><span class="checkitem_parts">契約社員</span></label></li>
<li><label><input type="radio" name="f_kubun" class="f_kubun checkitem" value="5" <?php if($f_kubun == 5){ echo ' checked="checked"'; };?>><span class="checkitem_parts">公務員</span></label></li>
<li><label><input type="radio" name="f_kubun" class="f_kubun checkitem" value="6" <?php if($f_kubun == 6){ echo ' checked="checked"'; };?>><span class="checkitem_parts">会社役員</span></label></li>
<li><label><input type="radio" name="f_kubun" class="f_kubun checkitem" value="7" <?php if($f_kubun == 7){ echo ' checked="checked"'; };?>><span class="checkitem_parts">自営業</span></label></li>
<li><label><input type="radio" name="f_kubun" class="f_kubun checkitem" value="8" <?php if($f_kubun == 8){ echo ' checked="checked"'; };?>><span class="checkitem_parts">無職</span></label></li>
<li><label><input type="radio" name="f_kubun" class="f_kubun checkitem" value="9" <?php if($f_kubun == 9){ echo ' checked="checked"'; };?>><span class="checkitem_parts">生活保護</span></label></li>
<li><label><input type="radio" name="f_kubun" class="f_kubun checkitem" value="10" <?php if($f_kubun ==10){ echo ' checked="checked"'; };?>><span class="checkitem_parts">その他</span></label></li>
	</ul>
	<div class="uestion_contents_line2"><input type="text" name="f_kubun_biko" class="f_kubun_biko" value="<?php echo $f_kubun_biko;?>" placeholder="その他備考"></div>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">お部屋探しのきっかけ</div>
<div class="uestion_contents">
	<ul class="section_info_ul clearfix">
<li><label><input type="radio" name="f_trigger" class="f_trigger checkitem" value="1" <?php if($f_trigger ==1){ echo ' checked="checked"'; };?>><span class="checkitem_parts">独立</span></label></li>
<li><label><input type="radio" name="f_trigger" class="f_trigger checkitem" value="2" <?php if($f_trigger ==2){ echo ' checked="checked"'; };?>><span class="checkitem_parts">就職</span></label></li>
<li><label><input type="radio" name="f_trigger" class="f_trigger checkitem" value="3" <?php if($f_trigger ==3){ echo ' checked="checked"'; };?>><span class="checkitem_parts">転職</span></label></li>
<li><label><input type="radio" name="f_trigger" class="f_trigger checkitem" value="4" <?php if($f_trigger ==4){ echo ' checked="checked"'; };?>><span class="checkitem_parts">結婚</span></label></li>
<li><label><input type="radio" name="f_trigger" class="f_trigger checkitem" value="5" <?php if($f_trigger ==5){ echo ' checked="checked"'; };?>><span class="checkitem_parts">転勤</span></label></li>
<li><label><input type="radio" name="f_trigger" class="f_trigger checkitem" value="6" <?php if($f_trigger ==6){ echo ' checked="checked"'; };?>><span class="checkitem_parts">住替</span></label></li>
<li><label><input type="radio" name="f_trigger" class="f_trigger checkitem" value="7" <?php if($f_trigger ==7){ echo ' checked="checked"'; };?>><span class="checkitem_parts">その他</span></label></li>
	</ul>
	<div class="uestion_contents_line2"><input type="text" name="f_trigger_biko" class="f_trigger_biko" value="<?php echo $f_trigger_biko;?>" placeholder="その他備考"></div>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">入居時期</div>
<div class="uestion_contents">
	<ul class="section_info_ul clearfix">
<li><label><input type="radio" name="f_jiki" class="f_jiki checkitem" value="1" <?php if($f_jiki ==1){ echo ' checked="checked"'; };?>><span class="checkitem_parts">今日中に決めたい</span></label></li>
<li><label><input type="radio" name="f_jiki" class="f_jiki checkitem" value="2" <?php if($f_jiki ==2){ echo ' checked="checked"'; };?>><span class="checkitem_parts">いいのがあれば決めたい</span></label></li>
<li><label><input type="radio" name="f_jiki" class="f_jiki checkitem" value="3" <?php if($f_jiki ==3){ echo ' checked="checked"'; };?>><span class="checkitem_parts">相場を見たい</span></label></li>
</ul>
</div>
</div>



<div class="uestion_container clearfix">
<div class="uestion_title">ご来店のきっかけ</div>
<div class="uestion_contents">
	<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" name="f_visit[]" class="f_visit checkitem" value="1" <?php if(strpos($f_visit,"1") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">アットホーム</span></label></li>
<li><label><input type="checkbox" name="f_visit[]" class="f_visit checkitem" value="2" <?php if(strpos($f_visit,"2") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">スーモ</span></label></li>
<li><label><input type="checkbox" name="f_visit[]" class="f_visit checkitem" value="3" <?php if(strpos($f_visit,"3") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">タカラ不動産</span></label></li>
<li><label><input type="checkbox" name="f_visit[]" class="f_visit checkitem" value="4" <?php if(strpos($f_visit,"4") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">店頭</span></label></li>
<li><label><input type="checkbox" name="f_visit[]" class="f_visit checkitem" value="5" <?php if(strpos($f_visit,"5") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">看板</span></label></li>
<li><label><input type="checkbox" name="f_visit[]" class="f_visit checkitem" value="6" <?php if(strpos($f_visit,"6") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">紹介</span></label></li>
</ul>
	<div class="uestion_contents_line2"><input type="text" name="f_visit_biko" class="f_visit_biko" value="<?php echo $f_visit_biko;?>" placeholder="紹介して頂いた方のお名前"></div>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">希望賃料（駐車料込み）</div>
<div class="uestion_contents"><input type="text" name="f_rent" class="f_rent middle" value="<?php echo $f_rent;?>" placeholder="60000"> 円以下
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">駐車場利用</div>
<div class="uestion_contents">
<p>軽　<input type="text" name="f_p1" class="f_p1 mini" value="<?php echo $f_p1;?>" placeholder="0">台</p>
<p>普通<input type="text" name="f_p2" class="f_p2 mini" value="<?php echo $f_p2;?>" placeholder="0">台</p>
<p class="biko">※利用がない場合は無記入で結構です</p>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">初期費用予算</div>
<div class="uestion_contents">
<p><input type="text" name="f_cost" class="f_cost middle" value="<?php echo $f_cost;?>" placeholder="0">円以下</p>
<p class="biko">※希望がない場合は無記入で結構です</p>
</div>
</div>


<div class="uestion_container madori_container clearfix">
<div class="uestion_title">希望間取</div>
<div class="uestion_contents">
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="1R" <?php if(strpos($f_madori,"1R") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">ワンルーム</span></label></li>
</ul>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="1K" <?php if(strpos($f_madori,"1K") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">1K</span></label></li>
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="1DK" <?php if(strpos($f_madori,"1DK") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">1DK</span></label></li>
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="1LDK" <?php if(strpos($f_madori,"1LDK") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">1LDK</span></label></li>
</ul>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="2K" <?php if(strpos($f_madori,"2K") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">2K</span></label></li>
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="2DK" <?php if(strpos($f_madori,"2DK") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">2DK</span></label></li>
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="2LDK" <?php if(strpos($f_madori,"2LDK") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">2LDK</span></label></li>
</ul>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="3K" <?php if(strpos($f_madori,"3K") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">3K</span></label></li>
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="3DK" <?php if(strpos($f_madori,"3DK") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">3DK</span></label></li>
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="3LDK" <?php if(strpos($f_madori,"3LDK") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">3LDK</span></label></li>
</ul>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="4K" <?php if(strpos($f_madori,"4K") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">4K</span></label></li>
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="4DK" <?php if(strpos($f_madori,"4DK") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">4DK</span></label></li>
<li><label><input type="checkbox" name="f_madori[]" class="f_madori checkitem" value="4LDK" <?php if(strpos($f_madori,"4LDK") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">4LDK</span></label></li>
</ul>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">ペット飼育</div>
<div class="uestion_contents">
<p>小型犬<input type="text" name="f_pet1" class="f_pet1 mini" value="<?php echo $f_pet1;?>" placeholder="0">匹</p>
<p>猫　　<input type="text" name="f_pet2" class="f_pet2 mini" value="<?php echo $f_pet2;?>" placeholder="0">匹</p>
<div class="uestion_contents_line2"><input type="text" name="f_pet_biko" class="f_pet_biko" value="<?php echo $f_pet_biko;?>" placeholder="その他"></div>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">入居人数</div>
<div class="uestion_contents">
<p><input type="text" name="f_people" class="f_people mini" value="<?php echo $f_people;?>" placeholder="0">人</p>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">築年数</div>
<div class="uestion_contents">
<p><input type="text" name="f_age" class="f_age mini" value="<?php echo $f_age;?>" placeholder="0">年以下</p>
<p class="biko">※希望がない場合は無記入で結構です</p>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">入居日</div>
<div class="uestion_contents">
<p><input type="text" name="f_startliving_year" class="f_startliving_year mini" value="<?php echo $f_startliving_year;?>" placeholder="2017">年<input type="text" name="f_startliving_month" class="f_startliving_month mini" value="<?php echo $f_startliving_month;?>" placeholder="10">月<input type="text" name="f_startliving_day" class="f_startliving_day mini" value="<?php echo $f_startliving_day;?>" placeholder="1">日</p>
<ul class="section_info_ul clearfix">
<li><label><input type="radio" name="f_startliving" class="f_startliving checkitem" value="1" <?php if($f_startliving ==1){ echo ' checked="checked"'; };?>><span class="checkitem_parts">上旬</span></label></li>
<li><label><input type="radio" name="f_startliving" class="f_startliving checkitem" value="2" <?php if($f_startliving ==2){ echo ' checked="checked"'; };?>><span class="checkitem_parts">中旬</span></label></li>
<li><label><input type="radio" name="f_startliving" class="f_startliving checkitem" value="3" <?php if($f_startliving ==3){ echo ' checked="checked"'; };?>><span class="checkitem_parts">下旬</span></label></li>
<li><label><input type="radio" name="f_startliving" class="f_startliving checkitem" value="4" <?php if($f_startliving ==4){ echo ' checked="checked"'; };?>><span class="checkitem_parts">まで</span></label></li>
</ul>
<div class="uestion_contents_line2"><input type="text" name="f_startliving_biko" class="f_startliving_biko" value="<?php echo $f_startliving_biko;?>" placeholder="その他"></div>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">希望エリア</div>
<div class="uestion_contents">
<textarea name="f_area" class="f_area checkitem"><?php echo $f_area;?></textarea>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">必須条件</div>
<div class="uestion_contents">
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" name="f_required[]" class="f_required checkitem" value="1" <?php if(strpos($f_required,"1") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">バストイレ別</span></label></li>
<li><label><input type="checkbox" name="f_required[]" class="f_required checkitem" value="2" <?php if(strpos($f_required,"2") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">脱衣所</span></label></li>
<li><label><input type="checkbox" name="f_required[]" class="f_required checkitem" value="3" <?php if(strpos($f_required,"3") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">独立洗面</span></label></li>
<li><label><input type="checkbox" name="f_required[]" class="f_required checkitem" value="4" <?php if(strpos($f_required,"4") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">室内洗濯機置場</span></label></li>
<li><label><input type="checkbox" name="f_required[]" class="f_required checkitem" value="5" <?php if(strpos($f_required,"5") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">エアコン</span></label></li>
<li><label><input type="checkbox" name="f_required[]" class="f_required checkitem" value="6" <?php if(strpos($f_required,"6") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">2F以上</span></label></li>
<li><label><input type="checkbox" name="f_required[]" class="f_required checkitem" value="7" <?php if(strpos($f_required,"7") !== false){ echo ' checked="checked"'; };?>><span class="checkitem_parts">木造・鉄骨造不可</span></label></li>
</ul>
<div class="uestion_contents_line2"><input type="text" name="f_required_biko" class="f_required_biko" value="<?php echo $f_required_biko;?>" placeholder="その他"></div>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">優先順位</div>
<div class="uestion_contents">
<p><input type="text" name="f_rank1" class="f_rank1 mini" value="<?php if($f_rank1){echo $f_rank1;}?>" placeholder="1"> 家賃</p>
<p><input type="text" name="f_rank2" class="f_rank2 mini" value="<?php if($f_rank2){echo $f_rank2;}?>" placeholder="2"> 新しさ</p>
<p><input type="text" name="f_rank3" class="f_rank3 mini" value="<?php if($f_rank3){echo $f_rank3;}?>" placeholder="3"> 広さ</p>
<p><input type="text" name="f_rank4" class="f_rank4 mini" value="<?php if($f_rank4){echo $f_rank4;}?>" placeholder="4"> 立地</p>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">お問合せ物件</div>
<div class="uestion_contents">
<textarea name="f_property" class="f_property checkitem"><?php echo $f_property;?></textarea>
</div>
</div>


<div class="uestion_container clearfix">
<div class="uestion_title">その他ご要望</div>
<div class="uestion_contents">
<textarea name="f_request" class="f_request checkitem"><?php echo $f_request;?></textarea>
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