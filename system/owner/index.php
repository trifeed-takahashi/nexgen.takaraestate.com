<?php
	
	// ログインしてクッキーが設定されていればコンテンツを見れる
	if($_COOKIE['c_shubetsu'] ){
	
	$title = "オーナー管理";
	$trash = $_GET["trash"];
	$search_form = $_GET["search_form"];
	
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

<script type="text/javascript" src="/chintai/common/js/libs.js?123"></script>
<script type="text/javascript" src="/chintai/common/js/widget.js"></script>
<script type="text/javascript" src="/system/common/js/widget.js?1"></script>
<script type="text/javascript" src="owner.js?111"></script>

<link rel="stylesheet" type="text/css" href="/system/common/css/import.css?125123219811143" media="screen,tv" />
<link rel="stylesheet" type="text/css" href="owner.css?12111111113" media="screen,tv" />





</head>

<body class="owner">



<?php require_once "../inc/header.php"; ?>
<div class="sub_menu_line">
<ul class="clearfix">
	<li><a href="/system/owner/">一覧</a></li>
	<li><a href="/system/owner/new.php">新規登録</a></li>
</ul>
</div><!-- sub_menu_line -->



<div class="new_form">

<form action="into.php" method="post">

<h2>新規オーナー登録</h2>

<div class="line clearfix">
<div class="sttl">オーナー名</div>
<div class="forms"><input type="text" name="ownername"></div>
</div>

<div class="line clearfix">
<div class="sttl">オーナーよみ</div>
<div class="forms"><input type="text" name="bukkenyomi"></div>
</div>

<div class="line clearfix">
<div class="sttl">電話番号</div>
<div class="forms"><input type="text" name="ownername"></div>
</div>

<div class="line clearfix">
<div class="sttl">物件名</div>
<div class="forms"><input type="text" name="bukken"></div>
</div>

<div class="line clearfix">
<div class="sttl">物件名よみ</div>
<div class="forms"><input type="text" name="bukkenyomi"></div>
</div>

<div class="line clearfix">
<div class="sttl">物件住所</div>
<div class="forms"><input type="text" name="bukkenaddress"></div>
</div>

<div class="line clearfix">
<div class="sttl">物件マップ</div>
<div class="forms"><input type="text" name="bukkengmap"></div>
</div>

<div class="line clearfix">
<div class="sttl">担当</div>
<div class="forms"><input type="text" name="ownername"></div>
</div>

<div class="line clearfix">
<div class="sttl">オーナー注意点</div>
<div class="forms"><textarea name="ownerchui"></textarea></div>
</div>

<div class="line clearfix">
<div class="sttl">指定業者</div>
<div class="forms">
<select name="ownergyousya">
<option value="0">指定なし</option>
<?php
require_once('../inc/db.php');
$rs2 = mysql_query("select * from gyousya ORDER BY gyousyayomi ASC",$db);// テーブル実行
while($arr_item2 = mysql_fetch_assoc($rs2)){
	echo '<option value="'.$arr_item2[gyousyaid].'"';
	echo '>'.$arr_item2[gyousyaname].'</option>';
}

?>
</select>
</div>
</div>


</form>

</fom>

</div><!-- sub_menu_line -->











<div id="content">


<div class="filter_menus clearfix">

<div class="filter">
<div class="filter_menu_title">一括操作</div><!-- filter_menu_title -->
<div class="filter_menu_box">

<select class="pulldown" name="pulldown">
    <option value="" selected>一括操作</option>
    <option value="1">削除する</option>
</select>

</div><!-- filter_menu_box -->
</div><!-- filter -->


<div class="filter">
<div class="filter_menu_title">フィルター</div><!-- filter_menu_title -->
<div class="filter_menu_box">

<ul class="clearfix">
<li class="filter4 checkitem_li checkitem_f"><a href="?trash=1<? if($search_form) {echo "&search_form=$search_form";}if($current_year or $current_year == 0) {echo "&current_year=$current_year";}else{echo "&current_year=2";}?>" <?php if($trash == 1 or $trash == "" or $trash == null) echo ' class="active"'; ?>>全員</a></li>
<li class="filter4 checkitem_li checkitem_l"><a href="?trash=2<? if($search_form) {echo "&search_form=$search_form";}if($current_year or $current_year == 0) {echo "&current_year=$current_year";}else{echo "&current_year=2";}?>" <?php if($trash == 2) echo ' class="active"'; ?>>ゴミ箱</a></li>
</ul>

</div><!-- filter_menu_box -->
</div><!-- filter -->

<div class="search">
<form id="search_form_submit">
<input type="hidden" name="trash" class="trash" value="<?php echo $trash;?>">
<input type="text" name="search_form" class="search_form" placeholder="担当名・オーナー名・物件名" value="<? if($search_form) echo $search_form;?>">
</form>
</div><!-- search -->



</div><!-- filter_menus -->



<div class="view_head">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value=""></label></div><!-- colum1 -->
<div class="view_colum colum_name"><span class="des">オーナー名</span><br>よみ</div><!-- colum5 -->
<div class="view_colum colum_tel">電話番号</div><!-- colum3 -->
<div class="view_colum colum_bukken">物件名<br>住所</div><!-- colum2 -->
<div class="view_colum colum_tanto">担当</div><!-- colum4 -->
<div class="view_colum colum_biko">オーナー注意点</div><!-- colum6 -->
</div><!-- view_head -->


<div class="view_row_items">

<div class="list_navi_box">
<p class="navi_text">検索中...</p>
</div><!-- list_navi_box -->

</div>




























</div><!-- content -->

</body>
</html>





<?php
// クッキー情報が切れたらログアウトする
}else{
echo '<meta http-equiv="refresh" content="0;URL=./login/login.php">';
}

?>